var valueList = document.getElementById('valueList');
// var text = '<span>Selected Values:</span><br>';
var listArray = [];

var checkboxes = document.querySelectorAll('.hobbies');

for(var hobbies of checkboxes) {
	hobbies.addEventListener('click', function() {
		if(this.checked == true){
			listArray.push(this.value);
			// var text = '<span>Selected Values:</span><br>';
			valueList.innerHTML = listArray.join(' ,');	
			} 
			else if (this.checked !== true) {
				listArray.pop(this.value);
				// var text = '<span>Selected Values:</span><br>';
				valueList.innerHTML = listArray;	

			}
			// else {
			// 	console.log('you unselected the Checkbox');
			// }
			else if (listArray.length == 0) {
				valueList.innerHTML = listArray;
			}
		}
	)
}

