$(document).ready(function () {

    /* function to login user */
    $("#kt_sign_up_form1").on('submit', (function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
        let datas = new FormData(this);

        $.ajax({
            url: "script/register",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                alert(data);
                console.log("ewdfewqdfew");
                if (data.trim() =="done") {
                    toastr.success('Your Account Creation Was Successful, Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href='../../authentication/user_auth/auth_login'
                        }, 3000);
                } else {

                }
            },
        });
    }));







    $("#kt_sign_in_form21").on('submit', (function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
        let datas = new FormData(this);
        $.ajax({
            url: "../../authentication/auth/auth_login",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                if (data.trim() == "done") {
                    toastr.success('Login Successful, Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href = "../../dashboards/userpanel";
                        }, 1000);
                } else {
                    toastr.error('Error Invalid Email and Password!');
                }
            },

        });
    }));

    $("#reset_pwd").on('submit', (function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
        let datas = new FormData(this);
        $.ajax({
            url: "../../authentication/auth/password_reset",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                if (data.trim() == "done") {
                    toastr.success('Password Reset Successful, Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href = "../../authentication/user_auth/len_new-pwd";
                        }, 1000);
                } else {
                    toastr.error('Error Invalid Email!');
                }
            },

        });
    }));

    $("#reset_activation").on('submit', (function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
        let datas = new FormData(this);
        $.ajax({
            url: "../../authentication/auth/verify_account",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {

                if (data.trim() == "done") {
                    toastr.success('The activation code has been sent to your email , Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href = "../../authentication/user_auth/two-steps";
                        }, 3000);
                } else {
                    toastr.error('Error Invalid Email!');
                }
            },

        });
    }));


    $("#kt_sing_in_two_steps_formsx").on('submit', (function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
        let datas = new FormData(this);
        $.ajax({
            url: "../../authentication/auth/otp_activation",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {

                if (data.trim() == "done") {
                    toastr.success('This account has been activated successfully , Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href = "../../dashboards/userpanel";
                        }, 3000);
                } else {
                    toastr.error('Error Invalid Activation code!');
                }
            },

        });
    }));

    $('#kt_docs_maxlength_basic').maxlength({
        warningClass: "badge badge-warning",
        limitReachedClass: "badge badge-success"
    });

    $("#kt_new_password_formsc").on('submit',(function (e) {
        e.preventDefault();
        let btn = $("#reset-btn");
        btn.attr('disabled', true).html("<span class='spinner-border text-primary'></span> Loading...");
        var target = document.querySelector("#ccv");
        var blockUI = new KTBlockUI(target, {
            message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
        });
        blockUI.block();
        let datas = new FormData(this);
        $.ajax({
            url: "../../authentication/auth/pwd_chmod",
            type: "POST",
            data: datas,
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                if (data.trim() == "done") {
                    // toastr.success('Your Password Has Been Changed successfully , Redirecting...')
                    toastr.success('Your Password Has Been Changed successfully , Redirecting...')
                    setTimeout(
                        function () {
                            window.location.href = "../../authentication/user_auth/auth_login";
                        }, 3000);
                } else {
                    toastr.error(data);
                    setTimeout(function () {
                        blockUI.release();
                        window.location.href = "../../authentication/user_auth/len_new-pwd";
                    },6000);

                }
            },

        });

    }));


});

