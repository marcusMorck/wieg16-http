# Övningar för Lektion 1: HTTP
## Övning 1
Undersök fem (5) valfria sidor och läs deras http-responser i nätverkspanelen i Chrome. Skriv ner vilken information du kan utröna genom att bara läsa http-headers
## Övning 2
Gör en sida med ett formulär på. Formuläret kan POST:a till samma sida som det ligger på. Aktivera "preserve log" i Chrome och studera request och response.
## Övning 3
Gör ändringar i formuläret (byt namn på formulärfält, lägg till/ta bort formulärfält) och notera hur request/respons förändras.
## Övning 4
PHP:s header-funktion är ganska klumpig. Skriv en egen funktion med namnet status_header vars syfte är att skicka statuskoder till webbläsaren. Signatur: status_header($code = 200)
När funktionen anropas så skall rätt statuskod skickas till webbläsaren tillsammans med lämplig text.
Exempel: "HTTP/1.0 404 Not Found"
## Övning 5
Skriv en funktion med namnet headers som kan användas för att sätta flera headers samtidigt.
Signatur: headers(array $headers = [])
Arrayen som skickas in skall ha strukturen [header => värde] där header är den header som skall sättas och värdet är det värde som headern skall ha.
## Övning 6
Skriv en funktion som heter redirect som använder PHP:s inbyggda header-funktion för att göra omdirigeringar.
Signatur: redirect($url, $code = 302)