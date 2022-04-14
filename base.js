function flyUp() {
	document.getElementById("vibeCheckTitle").style.top = "8px";

	document.getElementById("questionDiv").style.display = "block";

	setTimeout(function () {
		document.getElementById("startButton").style.top = "8px";
	}, 100);

	setTimeout(function () {
		document.getElementById("vibeCheckTitle").style.top = "-300px";
		document.getElementById("vibeCheckTitle").style.opacity = "0";
	}, 200);

	setTimeout(function () {
		document.getElementById("startButton").style.top = "-300px";
		document.getElementById("startButton").style.opacity = "0";
	}, 300);

	setTimeout(function () {
		document.getElementById("questionDiv").style.opacity = "1";
	}, 500);
}

var questions = new Array();

function setValue(question, id, value) {
	questions[question] = value;
	for (var i = 0; i < 10; i++) {
		document.getElementById("r".concat(question, i)).classList.remove("highlighted");
	}
	document.getElementById("r".concat(question, id)).classList.add("highlighted");
}

function results() {
	if (questions.length != 10) {
		document.getElementById("error").style.opacity = "1";
		setTimeout(function () {
			document.getElementById("error").style.opacity = "0";
		}, 1800);
	} else {
		var sum = 0;
		for (var i = 0; i < questions.length; i++) {
			sum += questions[i];
		}
		var avg = sum / questions.length;

		var passed = "passed";

		if (avg == 10) {
			grade = "A+";
		} else if (avg >= 9) {
			grade = "A";
		} else if (avg >= 8) {
			grade = "B";
		} else if (avg >= 6.5) {
			grade = "C";
		} else if (avg >= 5) {
			grade = "D";
		} else if (avg >= 4) {
			grade = "E";
		} else {
			grade = "F";
			passed = "failed";
		}

		document.getElementById("questionDiv").style.opacity = "0";
		document.getElementById("questionDiv").style.display = "none";

		document.getElementById("resultsDiv").style.display = "table";

		var quote;

		if (grade == "A+") {
			quote = "I wish I was vibin' as hard as you!";
		} else if (grade == "A") {
			quote = "We vibin'!";
		} else if (grade == "B") {
			quote = "Oh yeah!";
		} else if (grade == "C") {
			quote = "Could be better but we thriving!";
		} else if (grade == "D") {
			quote = "Get out of my room, I'm playing Minecraft!";
		} else if (grade == "F") {
			quote = "Consider seeing a therapist regarding your moods.";
		}

		if (questions[7] < 10) {
			quote +=
				"<br><br><small>For your suicidal thoughts, please consult a trained professional, or one of the <a href='https://en.wikipedia.org/wiki/List_of_suicide_crisis_lines'>suicide crisis lines from Wikipedia's List</a>.</small>";
		}

		document.getElementById("resultsDiv").innerHTML =
			'<div class="resultsContainer"><h1>Results</h1><h3>You ' +
			passed +
			' the Vibe Check!</h3><h2>Your Grade: <a class="grade">' +
			grade +
			"</a></h2><br><i>" +
			quote +
			"</i></div>";

		setTimeout(function () {
			document.getElementById("resultsDiv").style.opacity = "1";
		}, 500);
	}
}
