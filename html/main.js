function login() {
    var lg_uname = document.getElementById('lg_uname');
    var lg_pass = document.getElementById('lg_pass');
    var lg_warn = document.getElementById('lg_warn');

    console.log(lg_uname.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = () => {
        if (r.readyState == 4 && r.status == 200) {
            let t = r.responseText;
            console.log(t);
            if (t == 'Please enter Username') {
                lg_warn.innerHTML = t;
            } else if (t == 'Please enter Password') {
                lg_warn.innerHTML = t;
            } else if (t == 'Your login details invalid') {
                lg_warn.innerHTML = t;
            } else if (t == 'super_admin') {
                location.href = 'super_admin.php';
            }
        }
    };
    var f = new FormData();
    f.append('lg_uname', lg_uname.value);
    f.append('lg_pass', lg_pass.value);
    r.open("POST", "../controllers/login_process.php", true);
    r.send(f);
}

function logout() {
    console.log('logout');
    // var r = new XMLHttpRequest();
    // r.open("POST", "../controllers/logout_process.php", true);
    // r.send();
}