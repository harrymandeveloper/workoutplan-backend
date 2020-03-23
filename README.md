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
- Each day carries a date and a day of the week.



Stretch goals:

Adding checkboxes to measure progress – which potentially can be put into local storage (React) and a checkbox with a timer.

Adding a login and saving progress to local storage.
