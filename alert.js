
showSwal = function(type) {
'use strict';
if (type === 'login-success') {
swal({
title: 'Congratulations!',
text: 'You have been successfully logged in',
type: 'success',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})

}else if(type=== 'login-failure'){
swal({
title: 'Error!',
text: 'Unable to log you in',
type: 'warning',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if(type=== 'signup-success'){
swal({
title: 'Success!',
text: 'Your account has been created. LOG IN to Continue.',
type: 'success',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if(type=== 'signup-failure'){
swal({
title: 'Error!',
text: 'Unable to create your Account.',
type: 'error',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if(type=== 'preset-failure'){
swal({
title: 'Error!',
text: 'Unable to reset your password.',
type: 'error',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if(type=== 'login-mismatch'){
swal({
title: 'Error!',
text: 'Incorrect password entered!. TRY forgot password',
type: 'error',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if(type=== 'login-email_notexist'){
swal({
title: 'Error!',
text: 'Email does not exist!. Signup with that email now.',
type: 'error',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else if (type === 'logout-success') {
swal({
title: 'SUCCESS!',
text: 'You have been successfully logged out',
type: 'success',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})

}else if(type=== 'logout-failure'){
swal({
title: 'Error!',
text: 'Unable to log you out',
type: 'warning',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})
}else{
swal("Error occured !");
}
}

