# Workout Plan
Coronavirus Home Workout Plan - Back-end

Front-end available at: https://github.com/natelloyd1/workoutplan-frontend

A simple one page app designed to offer a series of exercises that may be performed to keep fit at home while self-isolating.

Functional Spec:

Front-end available at: https://github.com/natelloyd1/workoutplan-frontend
- A front-end built using React that will supply components without the page refreshing.
- A datepicker for selecting to and from dates for your exercise routine.
- A diagram featuring photos and/or illustrations of each exercise and an accompanying description.

Link to wireframe: https://docs.google.com/drawings/d/18APqbU5P6vCEVkcM478h1QJZ-miEvBNmjw1m5b4iPgI/edit



Back-end:
- Using Laravel, the back-end consists of an API with two databases, an exercise database and a days of the week database.
- There is a 'one to many' relationship between days of the week and these exercises.
- Each exercise carries a title and a short description.
- Each day consists of a number 1-7 and a series of exercises per day.

Database in detail:
https://docs.google.com/drawings/d/14N_clbtJ6jqmp6e97SOw3lfHR_DH3sF2H0lZYBsZFjI/edit?usp=sharing

Days-of-the-Week

ID
Exercise-IDs



Exercises

ID
Exercise-Name
Repetitions
Image-URL
Difficulty

### Exercises
#### `GET/days`
This will return an array of day objects with an id for ea
#### Data Format
```json
{
    "days" : [
        {
            "id" : 1,
            "exercises" : [
                "push-ups",
                "pull-ups",
                "burpees",
                "crunches"
            ],
            "numberOfDays" : 7,
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
            "reps" : 8,
            "imageURL" : "..."
        }
        {
            "name" : "pull-ups",
            "description" : "...",
            "reps" : 5,
            "imageURL" : "..."
        }
        {
            "name" : "burpees",
            "description" : "...",
            "reps" : 12,
            "imageURL" : "..."
        }
        {
            "name" : "crunches",
            "description" : "...",
            "reps" : 12,
            "imageURL" : "..."
        }
    ]
}
```

Stretch goals:

Adding checkboxes to measure progress – which potentially can be put into local storage (React) and a checkbox with a timer.

Adding a login and saving progress to local storage.

Add in a length of time and and an increased number of repetitions per set.
