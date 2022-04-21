<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Poemes</title>
    </head>

    <body>
        <header>
            <h1>Les poemes de Sonia</h1>
        </header>

        <main>

            @foreach($poems as $poem)
                <div class="card">
                    <h2>{{ $poem->titre }}</h2>
                    
                    <p>
                        {{ $poem->contenu  }}
                    </p>
                </div>
            @endforeach
            <a href="/add">Ajouter</a>
        </main>
    </body>
</html>