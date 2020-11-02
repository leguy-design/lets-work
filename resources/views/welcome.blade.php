<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <table>
            <button onclick="showResult()">go</button>
            <thead>
            <tr>
                @php
                    $operators = ['+', '=', '-', '*', '/'];
                @endphp
                @foreach($operators as $operator)
                    <td onclick="setOperators('{{ $operator }}')">{{ $operator }}</td>
                @endforeach
            </tr>

            </thead>
            <tbody>
                <tr>
                    @for($i=0; $i<10; $i++)
                        <td onclick="setNumbers('{{ $i }}')">{{ $i }}</td>
                    @endfor
                </tr>
            </tbody>
            <tfooter>
                <tr>
                    <td>Résultat: <span></span></td>
                </tr>
            </tfooter>
        </table>
    </body>
    <script>
        let calcul = "";
        function setNumbers(number){
            console.log(number);
            calcul += number;
        }
        function setOperators(operator) {
            console.log(operator);

            if (! parseInt(calcul[calcul.length - 1])) {
                return;
            }
            calcul += operator;
        }

        function showResult() {
            result = eval(calcul);
            document.getElementsByTagName('span')[0].innerHTML = result;
            calcul = "";
        }
    </script>
</html>
