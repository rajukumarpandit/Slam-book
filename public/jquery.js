var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="input-group p-2"> <input  type="text" class="form-control" id="question" name="question[]"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span  aria-hidden="true">Remove</span> </button></div></div> <div class="invalid-feedback"> please enter valid question </div>';
    
    objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
	$('.removeclass'+rid).remove();
}

//javascript code for copy link 

function copylink()
{
    value="http://localhost:8000/create";
    navigator.clipboard.writeText(value);
}