## Exemple laravel. CRUD fet a classe amb la base de dades editors.

Per clonar el projecte heu de fer:

- Clonam el projecte
    git clone https://github.com/tcampaner/exemple-laravel-intro.git

- Ens posicionam dins la carpeta del projecte
    cd nomprojecte

- Instal·lam dependències
    composer install

- Cream el nostre .env a partir de .env.example
    cp .env.example .env

- Configuram la connexió a la base de dades de la biblioteca amb l'arxiu .env

- Generam clau encriptació pel nostre .env
    php artisan key:generate