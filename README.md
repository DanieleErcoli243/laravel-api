Ciao ragazzi!
Esercizio di oggi: Laravel Boolfolio - Base
nome repo: laravel-auth
Ciao ragazzi,
creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.
Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.
Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.
Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.
composer require laravel/breeze --dev
php artisan breeze:install
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap --auth
npm i
togiamo la riga 3 di package.json
npm run dev
Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office. In questa fase, gestite anche la riorganizzazione eventuale di rotte, viste e via dicendo.
2. Creazione del modello Project con relativa migrazione, factory, controller e rotte.
Qui potete usare, per aiutarvi a generare i file delle viste velocemente il pacchetto che vi ho mostrato:
composer require lanciweb/laravel-make-view
php artisan make:view admin.projects --crud
3. Per la parte di back-office creiamo un resource controller `Admin\ProjectController` per gestire le operazioni CRUD dei progetti
Per oggi occupiamoci  solo di index,  show e destroy!
Bonus
Aggiungiamo il link alla lista dei progetti nell'header
Gestiamo la classe active quando siamo sulla lista dei progetti
Gestiamo la classe active anche quando siamo sul dettaglio dei progetti e comunque in ogni rotta che riguarda i progetti.
Nascondiamo il link ai progetti per chi non è loggato
Mettete tanta cura perchè questo potrà poi essere il vostro portfolio personale :smile:
Buon lavoro! (modificato) 


Ciao ragazzi!
Esercizio di oggi: Laravel Boolfolio - Base
nome repo: laravel-auth  (stessa di ieri)
Descrizione:
completiamo le CRUD mancanti per il vostro sito portfolio!
BONUS
tutte le cosette varie che abbiamo visto in classe!
SUPER BONUS
implementare la modale di bootstrap per la cancellazione
Buon lavoro! :faccia_leggermente_sorridente:

Ciao ragazzi!
Esercizio di oggi: Laravel Boolfolio - Upload Immagini
nome repo: laravel-auth  (sempre la stessa)
Descrizione:
Aggiungiamo la possibilità di inserire un immagine per i progetti. L'immagine deve essere inserita come file, come abbiamo visto in classe.
Se non avevate già previsto un campo per l'immagine nella tabella dei projects potete aggiungerlo con una migration :sorriso:
BONUS
tutte le cosette varie che abbiamo visto in classe!
Buon lavoro e buon weekend!! :faccia_leggermente_sorridente:

Esercizio di oggi: Laravel Boolfolio - Project Typology
nome repo: laravel-one-to-many
Ciao ragazzi,
continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Type. Questa
entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni
scorsi:
- creare il model Type
- creare la migration per la tabella types
- creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
- aggiungere ai model Type e Project i metodi per definire la relazione one to many
- visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
- permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione
Bonus 1:
creare il seeder per il model Type.
Bonus 2:
aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello
di amministrazione.
Buon lavoro e buon divertimento!

Ciao ragazzi,
Esercizio di oggi: Laravel Boolfolio - Project Technology
nome repo:laravel-many-to-many
continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la migration per la tabella technologies
- creare il model Technology
- creare la migration per la tabella pivot project_technology
- aggiungere ai model Technology e Project i metodi per definire la relazione many to many
- visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
- permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
Bonus 1:
creare il seeder per il model Technology.
Bonus 2:
aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.
Buon lavoro e buon divertimento!
