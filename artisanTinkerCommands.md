$exercise = new Exercise()
$exercise->exerciseName = "pull-up"
$exercise->exerciseDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium aliquam est. Quisque luctus sed risus non vestibulum. Donec congue rutrum facilisis."
$exercise->exerciseRepetitions = 6
$exercise->exerciseImageURL = "www.test.com"
$exercise->exerciseDifficulty = 5
$exercise->save()

$day = new Day(); 
$day->dayName = "Monday";
$day->dayNumber = 1;
$day->exercise1 = "Test Monday exercise 1";
$day->exercise2 = "Test Monday exercise 2";
$day->exercise3 = "Test Monday exercise 3";
$day->exercise4 = "Test Monday exercise 4";
$day->save();
$day = new Day(); 
$day->dayName = "Tuesday";
$day->dayNumber = 2;
$day->exercise1 = "Test Monday exercise 1";
$day->exercise2 = "Test Monday exercise 2";
$day->exercise3 = "Test Monday exercise 3";
$day->exercise4 = "Test Monday exercise 4";
$day->save();
$day = new Day(); 
$day->dayName = "Wednesday";
$day->dayNumber = 3;
$day->exercise1 = "Test Monday exercise 1";
$day->exercise2 = "Test Monday exercise 2";
$day->exercise3 = "Test Monday exercise 3";
$day->exercise4 = "Test Monday exercise 4";
$day->save();

$exercise = new Exercise(); 
$exercise->exerciseName = "Squat";
$exercise->exerciseDescription = "This is an exercise in which the body weight is pushed up with the legs from a position with knees bent at a 90 degree angle.";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/squat.jpg";
$exercise->exerciseDifficulty  = 5;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Sit Ups";
$exercise->exerciseDescription = "An exercise in which the entire back is lifted off the ground by contracting the abdominal muscles.";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/sit_ups.jpg";
$exercise->exerciseDifficulty  = 4;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Press-Ups";
$exercise->exerciseDescription = "The press-up is an exercise in which the body is lifted from a prone position by pressing with the arms.";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/press_ups.jpg";
$exercise->exerciseDifficulty  = 8;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Mountain Climbers";
$exercise->exerciseDescription = "Plank position with arms and legs long. Keep your abs pulled in and your body straight. Squeeze your glutes and pull your shoulders away from your ears.";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/mountain_climbers.jpg";
$exercise->exerciseDifficulty  = 10;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Jumping Jacks";
$exercise->exerciseDescription = "This is a cardio exercise which requires jumping between a position with arms to the side and legs together to a second position with arms straight above the head and legs wide apart.";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/jumping_jacks.jpg";
$exercise->exerciseDifficulty  = 6;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Burpees";
$exercise->exerciseDescription = "This is a cardio exercie which requires squatting down, kicking the feet back and extending the body, bringing the feet back in, then jumping straight up.";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/burpees.jpg";
$exercise->exerciseDifficulty  = 9;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Lunges";
$exercise->exerciseDescription = "This is an exercise in which weight is pressed up from a position in which one leg is in front of the body with knee bent and foot flat on the ground, and the other leg is behind the body. The body is pressed up so that both knees are straightened.";
$exercise->exerciseRepetitions = 10;
$exercise->exerciseImageURL = "img/lunges.jpg";
$exercise->exerciseDifficulty  = 2;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "High-Knees";
$exercise->exerciseDescription = "This is a cardio exercise which requires running by bringing the knees high so that the hip makes at least a right angle";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/high_knees.jpg";
$exercise->exerciseDifficulty  = 5;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Wall Sits";
$exercise->exerciseDescription = "This is an isometric exercise in which knees and hips are kept at right angles with the back against a wall";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/wall_sits.jpg";
$exercise->exerciseDifficulty  = 6;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Leg Raise";
$exercise->exerciseDescription = "This is an exercise in which legs are raised up from a lying position while keeping knees and rest of the body straight.";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/leg_raise.jpg";
$exercise->exerciseDifficulty  = 7;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Hip Thrust";
$exercise->exerciseDescription = "This is an exercise in which the hips are raised off the ground by pressing on the legs, until the thighs and upper body form a straight angle (or a bridge).";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/hip_thrust.jpg";
$exercise->exerciseDifficulty  = 3;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Step Up";
$exercise->exerciseDescription = "This is an exercise in which the body weight is pushed up by stepping up into a higher platform with one leg.";
$exercise->exerciseRepetitions = 6;
$exercise->exerciseImageURL = "img/step_up.jpg";
$exercise->exerciseDifficulty  = 1;
$exercise->save();
$exercise = new Exercise(); 
$exercise->exerciseName = "Chair Dip";
$exercise->exerciseDescription = "This is a variation of the dip in which chest and legs are kept straight and hands close together to focus on the triceps muscle.";
$exercise->exerciseRepetitions = 4;
$exercise->exerciseImageURL = "img/chair_dip.jpg";
$exercise->exerciseDifficulty  = 5;
$exercise->save();

$day = Day::find(1)
$day->dayName = 'Morning Kickstarter'
$day->save
$day = Day::find(2)
$day->dayName = 'Calisthenics for Coding'
$day->save
$day = Day::find(3)
$day->dayName = 'Bodyweight Pulse-raiser'
$day->save
$day = Day::find(4)
$day->dayName = 'Stay Home, Stay Fit'
$day->save
$day = Day::find(5)
$day->dayName = 'Lunchtime Fitness'
$day->save
$day = Day::find(6)
$day->dayName = 'GET MOVING'
$day->save
$day = Day::find(7)
$day->dayName = 'Evening Workout'
$day->save
