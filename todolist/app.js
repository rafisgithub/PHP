const form = document.querySelector('form');
const taskList = document.querySelector('#task-list');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	const taskInput = event.target.task;
	const task = taskInput.value.trim();
	if (task !== '') {
		addTask(task);
		taskInput.value = '';
	}
});

taskList.addEventListener('click', (event) => {
	if (event.target.tagName === 'LI') {
		event.target.classList.toggle('completed');
	}
});

function addTask(task) {
	const li = document.createElement('li');
	li.textContent = task;
	taskList.appendChild(li);
}
