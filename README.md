# [swroblewski.pl](https://swroblewski.pl)

[![Netlify Status](https://api.netlify.com/api/v1/badges/dc6e33a1-aa24-4ba9-8fe9-8f600c9a2998/deploy-status)](https://app.netlify.com/sites/thirsty-mcclintock-4e0d8b/deploys)

Personal website with basic contact informations.

## Technology

The website is built using the following tools:
 - [Jigsaw by Tighten](https://jigsaw.tighten.co/) - as the static page generator
 - [Tailwind CSS](https://tailwindcss.com/) - as the frontend layer
 - [particles.js](https://vincentgarreau.com/particles.js/) - as the particle effect in the background
 - [Netlify](https://www.netlify.com/) - as the continuous deployment hosting
 - [OVH](https://www.ovh.pl/) - as the domain provider

## Development

To start the local development, first clone the repository

```shell script
$ git clone https://github.com/Kreyu/swroblewski.pl
$ cd swroblewski.pl
```

then, install the dependencies

```shell script
$ composer install
$ npm install
```

finally, run the development script

```shell script
$ npm run watch
```

and to build the application, run the following script

```shell script
$ npm run production
```

Production build process is automated by the [Netlify](https://www.netlify.com/) integration. 

## Todo

- [ ] Blog
- [ ] Code snippets
