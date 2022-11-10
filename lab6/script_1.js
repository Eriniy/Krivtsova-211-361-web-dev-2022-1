function pow(x, n){
    var p;
    p = document.getElementById('pow');
    if (n >= 0){
        result = 1;
        while (n > 0) {
            result *= x;
            n -= 1;
        }
        p.innerHTML += result;
    }
    
}

function gsd(a, b){
    var p;
    p = document.getElementById('gsd');
    i = 1;
    result = 1;
    if (a < b){
        c = a;
        a = b;
        b = c;
    }
    while (i <= b){
        if (a % i != 0 || b % i != 0){
            break
        }
        if (a % i == 0 && b % i == 0){result = i;}
        i++;
    }
    p.innerHTML += result;
}

function minDigit(x){
    var p;
    p = document.getElementById('minDigit');
    min = x % 10;
    k = x.toString().length;
    for (let i = 0; i < k; i++){
        num = x % 10;
        if (num < min){min = num;}
        x = Math.floor(x/10);
    }
    p.innerHTML += min;
}

function pluralizeRecords(n){
    var p;
    p = document.getElementById('pluralizeRecords');
    var str;
    if (n % 10 == 1){str = 'В результате выполнения запроса была найдена '+ n + ' запись';}
    else if ((n >= 2 && n <= 4) || (n%10 >= 2 && n%10 <=4 && n > 20)){str = 'В результате выполнения запроса было найдено '+ n + ' записи';}
    else {str = 'В результате выполнения запроса были найдены '+ n + ' записей';}

    p.innerHTML = str;
}

function fibb(n){
    var p;
    p = document.getElementById('fibb');
    let res;
    if (n == 1 || n == 2){res = 1;}
    else {
        a = 1;
        b = 1;
        for (let i = 3; i <= n; i++){
            res = a + b;
            a = b;
            b = res;
        }
    }
    p.innerHTML += res;
}
// p.insertAdjacentHTML('where?', 'what?')