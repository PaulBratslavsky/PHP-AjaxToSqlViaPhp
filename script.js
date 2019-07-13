console.log('connected...');

let output = document.getElementById('output');
console.log(output);

output.innerHTML = '';

// AJAX
let ajaxHTTP = new XMLHttpRequest();

// Location of Json Data
let dataUrl = 'json.php';


ajaxHTTP.open('GET', dataUrl, true);
ajaxHTTP.setRequestHeader('content-type','application/json');

ajaxHTTP.onreadystatechange = () => {
    if ( ajaxHTTP.readyState == 4 && ajaxHTTP.status == 200) {

        console.log(ajaxHTTP.responseText, 'from response');
        let myJsonData = JSON.parse(ajaxHTTP.responseText);
        console.log(myJsonData, 'from myJsonData');
    
        output.innerHTML = 'LOADING...'

        let myOutput = '';

        for ( let myJson in myJsonData ) {
            myOutput += `
                <div>First Name: ${myJsonData[myJson].firstName}<br>
                Last Name: ${myJsonData[myJson].lastName}<br>
                Age: ${myJsonData[myJson].age}<hr>
                </div>
            `;
        }

        output.innerHTML = myOutput;

        console.log('Success');
    } else {
        console.log('fail');
    }
};

ajaxHTTP.send();


console.log(ajaxHTTP);
