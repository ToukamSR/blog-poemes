<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajouter un poeme</title>
    </head>

    <body>
        <header>
            <h1>Creer un nouveau poeme</h1>
        </header>

        <main>
            <form method='POST'>
                @csrf
                
                <label for="title">Titre:</label>
                <input type="text" id="title" name="title">

                <label for="content">Contenu:</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>

                <button type="submit">Creer</button>
            </form>
        </main>
    </body>
</html>