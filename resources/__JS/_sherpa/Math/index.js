let a = [];
let stat={};





// console.log(generateRandom());
// generateArray();
// calcStat();



function generateArray() {
	for (let i = 0; i < 10; i++){
		a.push(generateRandom(5));
	}
	console.log(a);
}



function generateRandom(min = 0,max = 10){
  let rand = min + Math.random() * (max + 1 - min);
  return Math.floor(rand);
}


function calcStat() {
	for (let i = 0; i < a.length; i++){
		if (stat[a[i]]) stat[a[i]]++;
		else stat[a[i]] = 1;
	}
	console.log(stat);
}





/*

let Am3 = [
	["Element", "Density", { role: "style" } ],
	["всего", 388, "bluegreen"],
	["Google", 97, "green"],
	["Директ", 21, "green"],
	["SEO", 85, "green"],
	["не отследить", 80, "green"],
	["неразобрано", 105, "green"],
];

let Am2 = [
	["Element", "Density", { role: "style" } ],
	["всего", 388, "blue"],
	["СА", 7, "green"],
	["SA com", 20, "green"],
	["Si com", 84, "green"],
	["СИ", 132, "green"],
	["остальное", 145, "green"],
];

let Am = [
	["Element", "Density", { role: "style" } ],
	["всего", 279, "bluegreen"],
	["СА", 8, "green"],
	["SA com", 25, "green"],
	["Si com", 73, "green"],
	["СИ", 75, "green"],
	["остальное", 98, "green"],
];

/**/


// document.addEventListener("DOMContentLoaded", function() {
//   let div=document.createElement('div');
//   div.innerHTML = "<div id='columnchart_values' class='Charts'></div>";
//   document.body.appendChild(div);

// });




/*
function vizArray() {
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);


	let dataK = [["Element", "Density", { role: "style" } ]];

	for (var key in stat){
		let temp = [];
		temp.push(key);
		temp.push(stat[key]);
		temp.push('green');
		dataK.push(temp);
	}


	console.log(dataK);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(Am);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
      //   title: "Реклама. Статистика по заявкам 2020",
		  title: "Источники. Статистика по заявкам 2021",
        width: 800,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }


// var data = google.visualization.arrayToDataTable([
//          ['Element', 'Density', { role: 'style' }],
//          ['Copper', 8.94, '#b87333'],            // RGB value
//          ['Silver', 10.49, 'silver'],            // English color name
//          ['Gold', 19.30, 'gold'],

//        ['Platinum', 21.45, 'color: #e5e4e2' ], // CSS-style declaration
// ]);
}
vizArray();


/***/