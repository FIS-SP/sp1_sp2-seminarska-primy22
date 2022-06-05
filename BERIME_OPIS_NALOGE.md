Primož Knez Student id:35210108 - CRUD API v PHP.


Prikaz, brisanje, dodajanje, dopolnitev in iskanje po bazi vinske kleti.
Za testiranje ukazov se uporabljal aplikacijo postman.

Izdelal sem bazo z artikli iz vinske kleti v MysqlWorkbench programu in jo uvozil na lokalni phpMyAdmin.

Kot srežniško osnovo sem uporabil program XAMPP.

Kreiranje datoteke so:

dbconfig.php
    v datoteki je napisana konfiguracija za dostop bo mysqli baze, ki sem jo kreiral na phpMyAdmin. 
    V primeru, da ni povezave z bazo podatkov, zahteva javi napako.

index.php
    z osnovno konfiguracijo v index.php, se izvede branje celotne baze 


.htaccess
    z konfiguracijo v .htaccess se znebimo končnic .php. Na ta način lahko v naslov napišemo namesto:
    http://localhost//seminarska1.1/index.php  
    naslednji naslov:
    http://localhost//seminarska1.1/klet


api-create.php
    z api.create kreiramo novo vrstico v tabeli.
    ker je vino_id podatek, ki se avtomatsko povečuje, je le ta izpuščen.Parametre vpišemo s pomočjo programa postman.

api-delete.php
    z api.delete izbrišemo vrstico v tabeli.
    tokrat za brisanje uporabimo vino_id, ker je vino_id podatek, ki je unikaten in točno določa vrstico, ki jo želimo izbrisati.

api-update.php
    z api.update popravimo podatke v tabeli.
    konkretno, če se zmanjša količina določenega vina, se kolicina zmanjša.

    
api-search.php
    z iskanjem iščemo določeno vrstiso na osnovi imena ali dela imena vina



