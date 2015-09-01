# GumGum Web Engineering - PHP Test
# Quiz

General
-------
- What do you like the most and dislike the most about PHP?
```
Most Liked: How easy it is to get code up and running. Every web hosting website I've built a website in always supported it.
Least Liked: The fact that at anytime they'll update the reserved keyword list. In PHP 5.6 they created traits which force me to have to rename an important class that i had called Trait.
```
- What blogs, books or resources you tend to have always available when working
with PHP?
```
When working with php, at home, I'm usually in the #laravel irc chatroom. Mainly because #php is invite-only
```
- We all use PHP reference from time to time, do you still go to PHP.net or what
do you use?
```
I use google which tends to take me to php.net or w3schools.net
```
- What do you use to code PHP? An IDE? A text editor? a mix?
```
When I code I use Phpstorm. When I pseudo-code I prefer Sublime 3 as it doesn't show me red squiggly lines.
```
- How do you usually check the basic functionaly of your code? Any special tool?
```
When checking basic functionality I just open a url that's running a script that hits my code block. But in a professional environment I rather run something like codeception or behat.
```
- What about debugging? How do you do it?
```
When debugging I follow the line numbers and print_r variables to ensure my application is running how I intended it to.
```
- Do you have a PHP stack available in your home/personal computer? What kind?
```
I'm using the LAMP stack. This past year I've been working more with MongoDB.
```
- Have you worked with a PHP that its not "local local", maybe a VM, a container
or a remote machine? What kind?
```
When I was at pricegrabber.com they had a sysadmin team which handled setting up the VM machine. 
My computer ran on linux and it made it easy to connect to the dev server to start coding.
```

PHP and the Browser
-------------------
- What is the difference between session and cookies? What's their relation?
```
Sessions are data stored server-side. Cookies are data stored client-side. We can store the session id into a cookie to be able to identify the user anytime.
```
- Why do we need to declare a domain to our cookies?
```
Though the browser will set the cookie to be the same name as the creator, if by chance we want the cookie to be read by a related subdomain, the ability to declare a domain name would allow that.
```
- You're asked to build a CRUD form for a books inventory system.
 - How would you start? What questions you would need to do to the owner?
```
"Hey Owner, to start off, what type of information related to the book do you imagine we'll need to save (i.e. title, author, publish date, etc.)"
```  
 - How do you design the FORM? What method and input types/names you choose?
```
POST action. text/Title, text/Author, text/Topic Tags(s), date/Published Date, text/Summary...
```   
 - How do you process it on the server?
```
$_POST and cleaning the inputs before storing it in the database
```

PHP and the Server
------------------
- Have you used PHP with Nginx? as FastCGI script? Ever configured it?
```
Haven't had the opportunity to yet.
```
- You're coding a report that reads a MySQL database, returning 5xx errors.
No PHP errors are shown in the page. What do you do? How do you debug it?
```
Check the error logs and/or write var_dump(); exit(); near the potential culprits until I find the offender
```
- The PHP script that process a shopping basket form is not working as expected.
The request shows correct in your browser debugging tools. What could it be?
```
Could be the database. Next step would be ensuring the database table the code is calling has the correct values.
```
- Is it possible to write a git hook in PHP? What is needed to be done?
```
Yes. Though I've never done it myself the most productive step would be looking for a library, like https://github.com/bruli/php-git-hooks
```
- Is it possible to create a real-time app with PHP? Meaning, the connection is
never closed? What would you use?
```
Yes. Though I would use a framework that supports it, the first thing I would checkout is http://socketo.me/
```
- How would you use your composer-loaded app from the CLI?
```
I would usually use the CLI to run my tests.
```

PHP and the Network
-------------------
- How do you optimize for bandwidth in PHP?
```
Setting image caches expiration dates & gzip compression
```
- You need to scrape a website, what would be your basic tools?
```
Some PHP library like https://github.com/FriendsOfPHP/Goutte
```
- You're required to build an API, what are your initial questions about it?
```
"What type of information do you imagine getting back from these endpoints (lets try to express it in nouns - dogs, videos, etc.)"
"What type of information do you have to give it (see if we can express it in nouns/adjectives - color, breed, author)"
```