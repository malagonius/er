<style>
{
	margin:0;
	padding: 0;
	box-sizing: border-box;
	font-family: monospace;
}
body{
	background: url(4.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	overflow: hidden;
}
section{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	transform-style: preserve-3d;
}

.earth{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 300px;
	height: 300px;
	background: url(5.jpg);
	border-radius: 50%;
	box-shadow: inset 0 0 20px rgba(0,0,0,1), 0 0 50px #4069ff;
	animation: animateEarth 30s linear infinite;
}
@keyframes animateEarth{

 0%{
 	background-position: 0 0;
 }
 100%{
 	background-position: -2391px 0;
 }
}
.circle{
	transform-style:  preserve-3d;
	animation: animateText 10s linear infinite;
}
@keyframes animateText{
	0%{
		transform: perspective(1000px) rotateY(360deg) rotateX(15deg) translateY(-30px);
	}
	100%{
		transform: perspective(1000px) rotateY(0deg) rotateX(15deg) translateY(-30px);
	}
}
.circle span{
	position: absolute;
	top:0;
	left: 0;
	color: #35146f;
	font-size: 3em;
	transform-origin: center;
	transform-style: preserve-3d;
	padding: 5px 11px;
	transform:  rotateY(calc(var(--i) * calc(360deg / 119))) translateZ(350px);
}
</style>
<body>
	<section>
		<div class="earth"></div>
		<div class="circle">
			La comprensione della felicità è un obbiettivo che si raggiunge con perseveranza nel servizio e nel digiuno dell'odio
		</div>
	</section>
</body>

<script>
	var circle = document.querySelector(".circle");
	var output = "";

	for (var i = 0; i < circle.innerText.length; i++) {
		output += "<span style='--i:"+i+"'>"+circle.innerText[i]+" </span>";
	}
	output += "<span style='--i:"+ (i+1) +"'>- </span>";
	circle.innerHTML = output;
</script>

