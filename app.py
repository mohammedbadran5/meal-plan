import pandas as pd
from flask import Flask, jsonify, request, render_template_string

app = Flask(__name__)

# Load the CSV file into a DataFrame
dataframe = pd.read_csv('C:\\xampp\\htdocs\\pro1\\full_bonapp_df_clean (2).csv')
print(dataframe.columns)  # Print column names to verify

# List of ingredients to choose from
INGREDIENTS = ["Pasta", "Tomato", "Onion", "Garlic", "Chicken", "Beef", "Carrot", "Potato", "Cheese"]

HELLO_HTML = """
<html>
<head>
    <title>Whatscooking!</title>
    <style>
 

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    text-align: center;
}

h1 {
    color: #333;
    margin-top: 20px;
}

p {
    color: #666;
}

#buttons {
    margin: 20px 0;
}

button {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
}

button:hover {
    background-color: #005f6b;
}

#selectedIngredients {
    font-weight: bold;
    color: #333;
}

#results {
    margin-top: 20px;
    text-align: left;
    display: inline-block;
}

#results h3 {
    color: #333;
}

#results p {
    color: #666;
}

hr {
    border: 0;
    height: 1px;
    background: #ccc;
}

    </style>
    <script>
        var selectedIngredients = [];

        function toggleIngredient(ingredient) {
            var index = selectedIngredients.indexOf(ingredient);
            if (index > -1) {
                selectedIngredients.splice(index, 1); // Remove ingredient
            } else {
                selectedIngredients.push(ingredient); // Add ingredient
            }
            document.getElementById('selectedIngredients').innerText = selectedIngredients.join(', ');
        }

        function fetchRecipes() {
            var ingredients = selectedIngredients.join(' ');
            fetch('/recipe?ingredients=' + ingredients)
                .then(response => response.json())
                .then(data => {
                    var resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';
                    if (data.error) {
                        resultsDiv.innerHTML = '<p>' + data.error + '</p>';
                    } else {
                        for (var key in data) {
                            var recipe = data[key];
                            resultsDiv.innerHTML += '<h3>' + recipe.recipe + '</h3>';
                            resultsDiv.innerHTML += '<p>Rating: ' + recipe.rating + '</p>';
                            resultsDiv.innerHTML += '<p>Ingredients: ' + recipe.ingredients + '</p>';
                            resultsDiv.innerHTML += '<p><a href="' + recipe.url + '">View Recipe</a></p>';
                            resultsDiv.innerHTML += '<hr>';
                        }
                    }
                });
        }
    </script>
</head>
<body>
    <h1>Welcome to my api: Whatscooking!</h1>
    <p>Please select some ingredients to receive recipe recommendations:</p>
    <div id="buttons">
        {% for ingredient in ingredients %}
        <button onclick="toggleIngredient('{{ ingredient }}')">{{ ingredient }}</button>
        {% endfor %}
    </div>
    <p>Selected Ingredients: <span id="selectedIngredients"></span></p>
    <button onclick="fetchRecipes()">Get Recipes</button>
    <div id="results"></div>
</body>
</html>
"""


@app.route('/', methods=["GET"])
def hello():
    return render_template_string(HELLO_HTML, ingredients=INGREDIENTS)

@app.route('/recipe', methods=["GET"])
def recommend_recipe():
    ingredients = request.args.get('ingredients')
    if not ingredients:
        return jsonify({"error": "No ingredients provided"}), 400

    ingredients_list = ingredients.lower().split()

    # Ensure the 'filtered_ingreds' column exists before proceeding
    if 'filtered_ingreds' not in dataframe.columns:
        return jsonify({"error": "The 'filtered_ingreds' column is missing from the dataset"}), 400

    try:
        # Filter recipes containing the specified ingredients
        filtered_recipes = dataframe[dataframe['filtered_ingreds'].apply(lambda x: all(ingredient in x.lower() for ingredient in ingredients_list))]
    except KeyError as e:
        return jsonify({"error": f"Column not found: {e}"}), 400

    response = {}
    count = 5
    max_recipes = 10
    for index, row in filtered_recipes.iterrows():
        if count >= max_recipes:
            break
        response[count] = {
            'recipe': str(row['dishtitle']),
            'rating': str(row['rating']),
            'ingredients': str(row['ingredients']),
            'url': str(row['url'])
        }
        count += 1

    return jsonify(response)

@app.route('/all_recipes', methods=["GET"])
def all_recipes():
    recipes = dataframe.to_dict(orient='records')
    return jsonify(recipes)

if __name__ == "__main__":
    app.run(host="0.0.0.0", debug=True)
