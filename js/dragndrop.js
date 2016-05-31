function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
	locked = false;
	$('#unlock').html("Unlocked!");
}

function resetDrag() {
	var container = document.getElementById('drag');
	container.innerHTML = save;
	$('#unlock').html("Please Unlock");
}

var save;
window.onload = function(){
	save = document.getElementById('drag').innerHTML;
}