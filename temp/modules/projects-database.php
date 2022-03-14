<?php

$projects_database = [
	
	[	
		"id" => 0,
		"thumbnail" => "images/lion-cub-thumb.png",
		"title" => "Lion-Cub Books",
		"category" => "CRUD",
		"description" => "This site is organized around the fundamentals of CRUD (create, read, update, delete). In this fictional book store site, user's can add, update, and delete books from the site's json database. All changes are reflected book-cards that appear throughout the site",
		"goal" => "The goal was to  create a fictional book-store website that is organized around the fundamentals of CRUD.",
		"process" => "What started as a site designed to allow me to further practice query strings and JSON file construction, ended up turning into a website in which the user can dynamically update the library database with books of their own. Furthermore, they can update any piece of information included in the book’s record as well as delete the book from the database entirely.",
		"link" => "https://peprojects.dev/alpha-3/shayne/projects/responsive-layout/",
		"pic-1" => "images/svgs/lion.svg",
	],

	[	"id" => 1,
		"thumbnail" => "images/vr-thumbnail.png",
		"title" => "Tech Brochure",
		"category" => "HTML, CSS",
		"description" => "This is a brochure website for a life-style VR tech device. It's responsive at every viewport and contains buttons and links with hover states. ",
		"goal" => "The goal was to style a website utilizing a prebuilt base code without changing the HTML. In this particular project, I attempted to style the base code in a way that evokes Meta's website for the Oculus Quest.",
		"process" => "Using CSS and PHP (the base code is a collection of php modules), I navigated through multiple files to style the base code without touching the HTML. I kept track of all my changes by using comments and writing my code at the bottom of the main css style document.",
		"link" => "https://peprojects.dev/alpha-3/shayne/projects/tech-brochure-version-3/",
		"modules" => [ 
			[
				"name" => "standard-text",
				'heading' => "example standard-text heading",
				'content' => "example standard-text paragraph",


			],

			[
				"name" => "before-and-after",
				"heading" => "example before and after",
				'content' => "example before and after",
				"before" => "https://peprojects.dev/images/square.jpg",
				"after" => "https://peprojects.dev/images/square.jpg",

			],
		],

		"pic-1" => "images/tech-pic-1.png",
		"pic-2" => "images/tech-pic-2.png",
		"pic-3" => "images/tech-pic-3.png",
	],

	[	"id" => 2,
		"thumbnail" => "images/php-exercise.jpg",
		"title" => "Forms with PHP",
		"category" => "HTML, PHP",
		"description" => "This project is a collection of different forms generated using PHP. Some programs will create a madlib. Other forms will display mathmatical calculations. ",
		"goal" => "The goal was to practice php by creating simple programs based on the exercises from Brian Hogan's <em>Exercises for Programmers</em> (2015)",
		"process" => "I combined PHP and HTML to produce a form that on submission produces a series of outputs based on conditional php statements",
		"link" => "https://peprojects.dev/alpha-3/shayne/projects/php/forms/",
		"pic-1" => "images/php-pic-1.png",
		"pic-2" => "images/php-pic-2.png",
		"pic-3" => "images/php-pic-3.png",

	],

]; ?>