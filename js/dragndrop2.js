function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev, lock, unlock) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
	if(lock == 'locked1')
		locked1 = false;
	if(lock == 'locked2')
		locked2 = false;
	$(unlock).html("");
	$(unlock).css({'color':'white'});
}

function resetDrag(drag, unlock) {
	var container = document.getElementById(drag);
	if(unlock == "#unlock1"){
		container.innerHTML = save1;
		locked1 = true;
	}
	if(unlock == "#unlock2"){
		container.innerHTML = save2;
		locked2 = true;
	}
	$(unlock).html("Please verify you are human, drag the key into the box");
}

var save1;
var save2;
window.onload = function(){
	save1 = document.getElementById('drag1').innerHTML;
	save2 = document.getElementById('drag2').innerHTML;
}