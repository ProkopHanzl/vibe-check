<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Not sure about your vibe? Have it checked professionally at VibeCheck!">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<title>VibeCheck</title>
</head>
<body>
	<div class="bodyContainerDiv">
		<div class="bodyDiv">
			<h1 id="vibeCheckTitle"><big>VIBE CHECK!</big></h1>
			<button id="startButton" onclick="flyUp();">S&nbsp;T&nbsp;A&nbsp;R&nbsp;T</button>
		</div>
	</div>
	<div id="questionDiv">
		<h2>On a scale from 1 to 10, tell us how true these statements are for you.</h2><br><br>

		I've been feeling full of energy lately.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r00" onclick="setValue(0, 0, 1)">1</div>
			<div class="rating" id="r01" onclick="setValue(0, 1, 2)">2</div>
			<div class="rating" id="r02" onclick="setValue(0, 2, 3)">3</div>
			<div class="rating" id="r03" onclick="setValue(0, 3, 4)">4</div>
			<div class="rating" id="r04" onclick="setValue(0, 4, 5)">5</div>
			<div class="rating" id="r05" onclick="setValue(0, 5, 6)">6</div>
			<div class="rating" id="r06" onclick="setValue(0, 6, 7)">7</div>
			<div class="rating" id="r07" onclick="setValue(0, 7, 8)">8</div>
			<div class="rating" id="r08" onclick="setValue(0, 8, 9)">9</div>
			<div class="rating" id="r09" onclick="setValue(0, 9, 10)">10</div>
		</div><br><br>
		Right now, I'm proud of myself and what I do.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r10" onclick="setValue(1, 0, 1)">1</div>
			<div class="rating" id="r11" onclick="setValue(1, 1, 2)">2</div>
			<div class="rating" id="r12" onclick="setValue(1, 2, 3)">3</div>
			<div class="rating" id="r13" onclick="setValue(1, 3, 4)">4</div>
			<div class="rating" id="r14" onclick="setValue(1, 4, 5)">5</div>
			<div class="rating" id="r15" onclick="setValue(1, 5, 6)">6</div>
			<div class="rating" id="r16" onclick="setValue(1, 6, 7)">7</div>
			<div class="rating" id="r17" onclick="setValue(1, 7, 8)">8</div>
			<div class="rating" id="r18" onclick="setValue(1, 8, 9)">9</div>
			<div class="rating" id="r19" onclick="setValue(1, 9, 10)">10</div>
		</div><br><br>
		The last few days were all fun.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r20" onclick="setValue(2, 0, 1)">1</div>
			<div class="rating" id="r21" onclick="setValue(2, 1, 2)">2</div>
			<div class="rating" id="r22" onclick="setValue(2, 2, 3)">3</div>
			<div class="rating" id="r23" onclick="setValue(2, 3, 4)">4</div>
			<div class="rating" id="r24" onclick="setValue(2, 4, 5)">5</div>
			<div class="rating" id="r25" onclick="setValue(2, 5, 6)">6</div>
			<div class="rating" id="r26" onclick="setValue(2, 6, 7)">7</div>
			<div class="rating" id="r27" onclick="setValue(2, 7, 8)">8</div>
			<div class="rating" id="r28" onclick="setValue(2, 8, 9)">9</div>
			<div class="rating" id="r29" onclick="setValue(2, 9, 10)">10</div>
		</div><br><br>
		For the last week or so, I've been waking up refreshed and well rested.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r30" onclick="setValue(3, 0, 1)">1</div>
			<div class="rating" id="r31" onclick="setValue(3, 1, 2)">2</div>
			<div class="rating" id="r32" onclick="setValue(3, 2, 3)">3</div>
			<div class="rating" id="r33" onclick="setValue(3, 3, 4)">4</div>
			<div class="rating" id="r34" onclick="setValue(3, 4, 5)">5</div>
			<div class="rating" id="r35" onclick="setValue(3, 5, 6)">6</div>
			<div class="rating" id="r36" onclick="setValue(3, 6, 7)">7</div>
			<div class="rating" id="r37" onclick="setValue(3, 7, 8)">8</div>
			<div class="rating" id="r38" onclick="setValue(3, 8, 9)">9</div>
			<div class="rating" id="r39" onclick="setValue(3, 9, 10)">10</div>
		</div><br><br>
		Recently, a little thing brought me a lot of joy.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r40" onclick="setValue(4, 0, 1)">1</div>
			<div class="rating" id="r41" onclick="setValue(4, 1, 2)">2</div>
			<div class="rating" id="r42" onclick="setValue(4, 2, 3)">3</div>
			<div class="rating" id="r43" onclick="setValue(4, 3, 4)">4</div>
			<div class="rating" id="r44" onclick="setValue(4, 4, 5)">5</div>
			<div class="rating" id="r45" onclick="setValue(4, 5, 6)">6</div>
			<div class="rating" id="r46" onclick="setValue(4, 6, 7)">7</div>
			<div class="rating" id="r47" onclick="setValue(4, 7, 8)">8</div>
			<div class="rating" id="r48" onclick="setValue(4, 8, 9)">9</div>
			<div class="rating" id="r49" onclick="setValue(4, 9, 10)">10</div>
		</div><br><br>
		I've been crying a lot lately.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r50" onclick="setValue(5, 0, 10)">1</div>
			<div class="rating" id="r51" onclick="setValue(5, 1, 9)">2</div>
			<div class="rating" id="r52" onclick="setValue(5, 2, 8)">3</div>
			<div class="rating" id="r53" onclick="setValue(5, 3, 7)">4</div>
			<div class="rating" id="r54" onclick="setValue(5, 4, 6)">5</div>
			<div class="rating" id="r55" onclick="setValue(5, 5, 5)">6</div>
			<div class="rating" id="r56" onclick="setValue(5, 6, 4)">7</div>
			<div class="rating" id="r57" onclick="setValue(5, 7, 3)">8</div>
			<div class="rating" id="r58" onclick="setValue(5, 8, 2)">9</div>
			<div class="rating" id="r59" onclick="setValue(5, 9, 1)">10</div>
		</div><br><br>
		This week, I've been feeling unusually irritated.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r60" onclick="setValue(6, 0, 10)">1</div>
			<div class="rating" id="r61" onclick="setValue(6, 1, 9)">2</div>
			<div class="rating" id="r62" onclick="setValue(6, 2, 8)">3</div>
			<div class="rating" id="r63" onclick="setValue(6, 3, 7)">4</div>
			<div class="rating" id="r64" onclick="setValue(6, 4, 6)">5</div>
			<div class="rating" id="r65" onclick="setValue(6, 5, 5)">6</div>
			<div class="rating" id="r66" onclick="setValue(6, 6, 4)">7</div>
			<div class="rating" id="r67" onclick="setValue(6, 7, 3)">8</div>
			<div class="rating" id="r68" onclick="setValue(6, 8, 2)">9</div>
			<div class="rating" id="r69" onclick="setValue(6, 9, 1)">10</div>
		</div><br><br>
		I've been having suicidal thoughts in the past few days.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r70" onclick="setValue(7, 0, 10)">1</div>
			<div class="rating" id="r71" onclick="setValue(7, 1, 9)">2</div>
			<div class="rating" id="r72" onclick="setValue(7, 2, 8)">3</div>
			<div class="rating" id="r73" onclick="setValue(7, 3, 7)">4</div>
			<div class="rating" id="r74" onclick="setValue(7, 4, 6)">5</div>
			<div class="rating" id="r75" onclick="setValue(7, 5, 5)">6</div>
			<div class="rating" id="r76" onclick="setValue(7, 6, 4)">7</div>
			<div class="rating" id="r77" onclick="setValue(7, 7, 3)">8</div>
			<div class="rating" id="r78" onclick="setValue(7, 8, 2)">9</div>
			<div class="rating" id="r79" onclick="setValue(7, 9, 1)">10</div>
		</div><br><br>
		I've been missing a lot of deadlines lately.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r80" onclick="setValue(8, 0, 10)">1</div>
			<div class="rating" id="r81" onclick="setValue(8, 1, 9)">2</div>
			<div class="rating" id="r82" onclick="setValue(8, 2, 8)">3</div>
			<div class="rating" id="r83" onclick="setValue(8, 3, 7)">4</div>
			<div class="rating" id="r84" onclick="setValue(8, 4, 6)">5</div>
			<div class="rating" id="r85" onclick="setValue(8, 5, 5)">6</div>
			<div class="rating" id="r86" onclick="setValue(8, 6, 4)">7</div>
			<div class="rating" id="r87" onclick="setValue(8, 7, 3)">8</div>
			<div class="rating" id="r88" onclick="setValue(8, 8, 2)">9</div>
			<div class="rating" id="r89" onclick="setValue(8, 9, 1)">10</div>
		</div><br><br>
		I haven't been in the mood to be around my friends lately.<br><br>
		<div class="ratingDiv">
			<div class="rating" id="r90" onclick="setValue(9, 0, 10)">1</div>
			<div class="rating" id="r91" onclick="setValue(9, 1, 9)">2</div>
			<div class="rating" id="r92" onclick="setValue(9, 2, 8)">3</div>
			<div class="rating" id="r93" onclick="setValue(9, 3, 7)">4</div>
			<div class="rating" id="r94" onclick="setValue(9, 4, 6)">5</div>
			<div class="rating" id="r95" onclick="setValue(9, 5, 5)">6</div>
			<div class="rating" id="r96" onclick="setValue(9, 6, 4)">7</div>
			<div class="rating" id="r97" onclick="setValue(9, 7, 3)">8</div>
			<div class="rating" id="r98" onclick="setValue(9, 8, 2)">9</div>
			<div class="rating" id="r99" onclick="setValue(9, 9, 1)">10</div>
		</div><br><br>
		<a id="error">Error: Please answer all questions</a><br><br>
		<button id="vibeButton" onclick="results();">C&nbsp;H&nbsp;E&nbsp;C&nbsp;K&nbsp; &nbsp;M&nbsp;Y&nbsp; &nbsp;V&nbsp;I&nbsp;B&nbsp;E</button>
	</div>
	<div id="resultsDiv">
	</div>
	<script type="text/javascript">
		function flyUp() {
			document.getElementById("vibeCheckTitle").style.top = "8px";

			document.getElementById("questionDiv").style.display = "block";

			setTimeout(function() {
				document.getElementById("startButton").style.top = "8px";
			}, 100)

			setTimeout(function() {
				document.getElementById("vibeCheckTitle").style.top = "-300px";
				document.getElementById("vibeCheckTitle").style.opacity = "0";
			}, 200)

			setTimeout(function() {
				document.getElementById("startButton").style.top = "-300px";
				document.getElementById("startButton").style.opacity = "0";
			}, 300)

			setTimeout(function() {
				document.getElementById("questionDiv").style.opacity = "1";
			}, 500)
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
				setTimeout(function() {
					document.getElementById("error").style.opacity = "0";
				}, 1800)
			} else {
				var sum = 0;
				for(var i = 0; i < questions.length; i++) {
					sum += questions[i];
				}
				var avg = sum/questions.length;

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
				} else {
					grade = "F";
					passed = "failed";
				}

				document.getElementById("questionDiv").style.opacity = "0";
				document.getElementById("questionDiv").style.display = "none";

				document.getElementById("resultsDiv").style.display = "table";

				var quote;

				if (grade == "A+") {
					quote = "I wish I was vibin' as hard as you!"
				} else if (grade == "A") {
					quote = "We vibin'!"
				} else if (grade == "B") {
					quote = "Oh yeah!"
				} else if (grade == "C") {
					quote = "Could be better but we thriving!"
				} else if (grade == "D") {
					quote = "Get out of my room, I'm playing Minecraft!"
				} else if (grade == "F") {
					quote = "Consider seeing a therapist regarding your moods."
				}

				if (questions[7] < 10) {
					quote += "<br><br><small>For your suicidal thoughts, please consult a trained professional, or one of the <a href='https://en.wikipedia.org/wiki/List_of_suicide_crisis_lines'>suicide crisis lines from Wikipedia's List</a>.</small>"
				}

				document.getElementById("resultsDiv").innerHTML = '<div class="resultsContainer"><h1>Results</h1><h3>You ' + passed + ' the Vibe Check!</h3><h2>Your Grade: <a class="grade">' + grade + '</a></h2><br><i>' + quote + '</i></div>';

				setTimeout(function() {
					document.getElementById("resultsDiv").style.opacity = "1";
				}, 500)
			}
		}
	</script>
</body>
</html>