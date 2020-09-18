function fetch() {
    $.get("https://api.covid19api.com/summary",

        function(data) {
            // console.log(data['Countries'].length);
            var covidtable = document.getElementById('covidtable');
            for(var i=1; i<(data['Countries'].length); i++) {
                var x = covidtable.insertRow();
                x.insertCell(0);
                covidtable.rows[i].cells[0].innerHTML = i;
                covidtable.rows[i].cells[0].style.background = "#000";
                covidtable.rows[i].cells[0].style.color = "#fff";

                x.insertCell(1);
                covidtable.rows[i].cells[1].innerHTML = data['Countries'][i-1]['Country'];
                covidtable.rows[i].cells[1].style.background = "#777";
                covidtable.rows[i].cells[1].style.color = "#fff";

                x.insertCell(2);
                covidtable.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                covidtable.rows[i].cells[2].style.background = "#f80";
                covidtable.rows[i].cells[2].style.color = "#000";
                
                x.insertCell(3);
                covidtable.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                covidtable.rows[i].cells[3].style.background = "#080";
                covidtable.rows[i].cells[3].style.color = "#000";

                x.insertCell(4);
                covidtable.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                covidtable.rows[i].cells[4].style.background = "#f00";
                covidtable.rows[i].cells[4].style.color = "#000";

                x.insertCell(5);
                covidtable.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                covidtable.rows[i].cells[5].style.background = "#ffbe73";
                covidtable.rows[i].cells[5].style.color = "#000";

                x.insertCell(6);
                covidtable.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
                covidtable.rows[i].cells[6].style.background = "#00f700";
                covidtable.rows[i].cells[6].style.color = "#000";

                x.insertCell(7);
                covidtable.rows[i].cells[7].innerHTML = data['Countries'][i-1]['NewDeaths'];
                covidtable.rows[i].cells[7].style.background = "#ff4343";
                covidtable.rows[i].cells[7].style.color = "#000";
            }
        }
        
    );
}