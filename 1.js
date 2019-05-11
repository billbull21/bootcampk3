<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
</head>
<body>
    <script>
        //deklarasi data
        var biodata = {
            'nama'        : 'Habibul Umam',
            'address'     : 'RT5/RW2 Ds. Bandungrejo - Plumpang - Tuban',
            'hobbies'     : ['coding', 'sepakbola', 'membaca'],
            'is_married'  : false,
            'school'      : {
                            'highSchool'  : 'SMKN1TUBAN',
                            'university'  : 'Harvard'
            },
            'skills'      : [
                {'name'      : 'fullstack Dev'},
                {'score'     : 100}  
            ]
        };
        
        //mengeluarkan pada html id root agar bisa ditampilkan
        //data juga bisa diambil
        var data = JSON.stringify(biodata);
        document.write(data);
    </script>
</body>
</html>
