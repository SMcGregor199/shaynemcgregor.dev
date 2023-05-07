# Setting up a live Site with Digital Ocean
### May 7th, 2023

Hey everyone.

I'm writing to talk about my most recent experience making my portfolio site, [shaynemcgregor.dev](https://shaynemcgregor.dev/), publicly accessible.

In order to do this, I used 4 different tools in tandem. 

1. Google Domains
2. Digital Ocean
3. Plesk 
4. Cloudflare 

## Google Domains
[Here](https://domains.google/) is where I purchased the the name for my portfolio site. There isn't much more to say here. After purchasing there are some things you can do such as 1. forward the domain to another url or 2. point the domain to an i.p address that you own, but for reasons I'll get into later, I decided to control my domain configurations through Cloudflare. 

## Digital Ocean
[Here](https://www.digitalocean.com/) is where I purchased the server space for my site. I started by creation what Digital Ocean calls a Droplet, and for the operating system, I decided to go with CentOS 7. 

I picked CentOS 7 basically I recently found myself reading Jay Versluis's [_LAMP Stack for Humans_](https://www.amazon.com/LAMP-Stack-Humans-laptop-network/dp/151145749X/ref=sr_1_1?crid=3D4IK25KFMB87&keywords=Lamp+stack+for+humans&qid=1683491079&s=books&sprefix=lamp+stack+for+humans%2Cstripbooks%2C94&sr=1-1). While Versluis's objective is to teach his readers how to set up their own web server at home (with their own computer), the relevant takeaway for me was that CentOS, particularly version 7, is one of the most stable Linux distributions around, with each version having a life cycle of around 10 years. Hosting a website on a computer running CentOS means more long-term support and less continuous server maintenance. 

## Plesk
In addition to my choice in OS, I also decided to install a graphical interface through which I can interact with the files on my server. For this I decided to go with Plesk. Plesk made it really easy for me to get my website up and running by allowing me to connect my domain to the IP address created for me through Digital Ocean and upload my files via a connection with my portfolio's Github repo. Additionally, through a combination of SSH public keys and a webhook url generated for me through Plesk, I was able to configure the GitHub-Plesk connection such that any commits I push to my repo will automatically be reflected on my live site 😀

## Cloudflare 
Finally, I used [Cloudflare](https://www.cloudflare.com/) to allow my site to be accessible via HTTPS. Before Cloudflare, even with everything connected, I was running into trouble because my browser, Google Chrome, wouldn't allow me to access my portfolio site because my digital ocean server couldn't offer an SSL certificate that Chrome, or Firefox, for that matter, could trust. After some research, I saw that you could install one in the server through the terminal, but Cloudflare, much like Plesk, allows you the option to control things such as your domain's SSL/TLS through their interface. Doing so required me to replace the name servers within my google domains account with Cloudflare's to prove my ownership of the domain, but once I did that, I was able to securely connect to my portfolio site through Google Chrome. 

## Conclusion 
I'm really glad I was able to get my portfolio site up and running. What i'm interesting in now is making use of Plesk's database features so that I can make my WordPress work live as well. 

-----

Best,
Shayne
    

   

  