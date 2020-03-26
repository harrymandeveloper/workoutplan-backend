# COVID Fit - Coronavirus Home Workout Plan

## Steps 
On cloning the git Repo please follow the below steps:

- composer install
- vendor/bin/homestead make
- Homestead.yaml file edit for memory allocation
- vagrant up
- vagrant ssh
- cd code
- artisan migrate
- artisan db:seed
- Map site to icorona.test



Coronavirus Home Workout Plan - Back-end
=======

Front-end available at: https://github.com/natelloyd1/workoutplan-frontend

A simple one page app designed to offer a series of exercises that may be performed to keep fit at home while self-isolating.

Functional Spec:

Front-end available at: https://github.com/natelloyd1/workoutplan-frontend
- A front-end built using React that will supply components without the page refreshing.
- A diagram featuring photos and/or illustrations of each exercise and an accompanying description.

Link to wireframe: https://docs.google.com/drawings/d/18APqbU5P6vCEVkcM478h1QJZ-miEvBNmjw1m5b4iPgI/edit

Back-end:
- Using Laravel, the back-end consists of an API with two databases, 'exercises' an exercise database and 'days' a days of the week database.
- There is a 'many to many' relationship between days of the week and these exercises.
- Each exercise carries a title and a short description.
- Each day consists of a number 1-7 and a series of exercises per day.
 

Database in detail:
https://docs.google.com/drawings/d/14N_clbtJ6jqmp6e97SOw3lfHR_DH3sF2H0lZYBsZFjI/edit?usp=sharing


### Exercises
#### `GET/days`
This will return an array of day objects with an id for each
#### Data Format
```json
{
    "days" : [
        {
		"dayName":"Monday",
		"dayNumber": 1
	}
    ]
}
```
#### `GET/days/<id>`
This will return an array of exercises for the specified day
#### Data Format
```json
{
    "exercises" : [
        {
            "name" : "push-ups",
            "description" : "...",
            "repetitions" : 8,
            "imageURL" : "..."
        }
        {
            "name" : "pull-ups",
            "description" : "...",
            "repetitions" : 5,
            "imageURL" : "..."
        }
        {
            "name" : "burpees",
            "description" : "...",
            "repetitions" : 12,
            "imageURL" : "..."
        }
        {
            "name" : "crunches",
            "description" : "...",
            "repetitions" : 12,
            "imageURL" : "..."
        }
    ]
}
```


Stretch goals:

Adding a seeder to seed the database automatically.

Adding checkboxes to measure progress – which potentially can be put into local storage (React) and a checkbox with a timer.

Adding a login and saving progress to local storage.

Add in a length of time and and an increased number of repetitions per set.

Add a datepicker to the front-end to allow users to select to and from dates for their workouts.
