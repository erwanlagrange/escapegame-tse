$(function () {

    var table = [];

    $("input[name='A']").on('input', (function () {
        if ($("input[name='A']").val() == 23) {
            $('#msgA').text('Bonne réponse').css({ "color": "green" });
            table.push("RepA");
            table = table.filter(function (elem, index, self) {
                return index === self.indexOf(elem);
            });
        }
        else if ($("input[name='A']").val() == "") {

            $("#msgA").text("");

        }
        else {
            $('#msgA').text('Mauvaise réponse').css({ "color": "red" });
        }
    }));


    $("input[name='B']").on('input', (function () {
        if ($("input[name='B']").val() == 7) {
            $('#msgB').text('Bonne réponse').css({ "color": "green" });
            table.push("RepB");
            table = table.filter(function (elem, index, self) {
                return index === self.indexOf(elem);
            });
        }
        else if ($("input[name='B']").val() == "") {

            $("#msgB").text("");

        }
        else {
            $('#msgB').text('Mauvaise réponse').css({ "color": "red" });
        }
    }));


    $("input[name='C']").on('input', (function () {
        if ($("input[name='C']").val() == 16) {
            $('#msgC').text('Bonne réponse').css({ "color": "green" });
            table.push("RepC");
            table = table.filter(function (elem, index, self) {
                return index === self.indexOf(elem);
            });
        }
        else if ($("input[name='C']").val() == "") {

            $("#msgC").text("");

        }
        else {
            $('#msgC').text('Mauvaise réponse').css({ "color": "red" });
        }
    }));


    $("input[name='D']").on('input', (function () {
        if ($("input[name='D']").val() == 5) {
            $('#msgD').text('Bonne réponse').css({ "color": "green" });
            table.push("RepD");
            table = table.filter(function (elem, index, self) {
                return index === self.indexOf(elem);
            });
        }
        else if ($("input[name='D']").val() == "") {

            $("#msgD").text("");

        }
        else {
            $('#msgD').text('Mauvaise réponse').css({ "color": "red" });
        }
    }));


    $("input[name='E']").on('input', (function () {
        if ($("input[name='E']").val() == 14) {
            $('#msgE').text('Bonne réponse').css({ "color": "green" });
            table.push("RepE");
            table = table.filter(function (elem, index, self) {
                return index === self.indexOf(elem);
            });
        }
        else if ($("input[name='E']").val() == "") {

            $("#msgE").text("");

        }
        else {
            $('#msgE').text('Mauvaise réponse').css({ "color": "red" });
        }
    }));

    $("input[class='response']").on('input', function () {
        console.log('oof');
        var result = 0;
        console.log(table);
        table.forEach(function () {
            result++;
            console.log(result);
            if (result == 1) {
                $('#img').css("background-image", "url(img/ans1.png)");
            } else if (result == 2) {
                $('#img').css("background-image", "url(img/ans2.png)");
            } else if (result == 3) {
                $('#img').css("background-image", "url(img/ans3.png)");
            } else if (result == 4) {
                $('#img').css("background-image", "url(img/ans4.png)");
            } else if (result == 5) {
                $('#img').css("background-image", "url(img/ans5.png)");
                $('.scene').css("display", "none");
                $('#rotating-speed').css("display", "block");
            }
        });
    });

});