//Here we're using destructuring...remember that?
import {double, tripple, render} from './library.js';

const outlet = document.querySelector('span');

render(outlet, double(10) + tripple(10)); // answer should be 50;
