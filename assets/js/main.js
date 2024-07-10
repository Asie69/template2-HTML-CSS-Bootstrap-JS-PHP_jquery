/* user delete-start */
function deleteUser(idUser, ev) {
    if (confirm('از حذف کاربر مطمئن هستید؟')) {
        $.ajax({
            url: "api/delete_user_api.php",
            type: "POST",
            data: { id: idUser },
            success: function (res) {
                let response = JSON.parse(res);
                if (response.status == 200) {
                    ev.target.parentElement.parentElement.remove();
                }

            }
        })
    }
}
/* user delete-end */

/* user edit-start */
function editUser(idUser) {
    let userName = document.querySelector('#userNameEdit').value;
    let phoneNumber = document.querySelector('#phoneEdit').value;
    let email = document.querySelector('#emailEdit').value;
    let comment = document.querySelector('#commentEdit').value;   
    $.ajax({
        
        url: "api/edit_user_api.php",
        type: "POST",
        data: {
            id: idUser,
            username: userName,
            email: email,
            phoneNumber: phoneNumber,
            comment:comment
        },
        success: function (res) {
            let response = JSON.parse(res);
            if (response.status == 200) {
                alert(response.msg);
                window.location.href = "profile.php";
            } else {
                alert(response.msg);
            }
           

        }
    })
}
/* user edit-end */

/*Date converting-start */
if (document.querySelector('.reg-date-user')){
    let listDate = document.querySelectorAll('.reg-date-user');
    listDate.forEach(item=>{
        item.innerText = moment(el.innerText, 'YYYY/MM/DD').locale('fa').format('YYYY/MM/DD');
    })
}
/*Date converting-end */



