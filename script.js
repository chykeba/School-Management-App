
const list = document.getElementById('list');
const form = document.getElementById('course-form');
const text = document.getElementById('cname');
const code = document.getElementById('code');
const unit = document.getElementById('unit');


const localStoragecourses = JSON.parse(
  localStorage.getItem('courses')
);

let courses =
  localStorage.getItem('courses') !== null ? localStoragecourses : [];

// Add course
function addcourse(e) {
  e.preventDefault();

  if (text.value.trim() === '' || code.value.trim() === '' || unit.value.trim() === '') {
    alert('Please add a Course Name and Unit');
  } else {
    const course = {
      id: generateID(),
      text: text.value,
      code: code.value,
      unit: unit.value,
    };

    courses.push(course);

    addcourseDOM(course);

  

    updateLocalStorage();

    text.value = '';
    code.value = '';
    unit.value = '';
    
  }
}
generateID();
// Generate random ID
function generateID() {
  return Math.floor(Math.random() * 100000000);
}

// Add courses to DOM list
function addcourseDOM(course) {
  // Get sign
  

  const item = document.createElement('li');

  // Add class based on value
  item.classList.add('plus');

  item.innerHTML = `
    <strong>Course:&nbsp;</strong> ${course.text}  &nbsp;&nbsp; <strong>Course Unit:</strong> &nbsp;${course.unit}</span> <button class="delete-btn" onclick="removecourse(${
    course.id
  })">x</button>
  `;

  list.appendChild(item);
}


// Remove course by ID
function removecourse(id) {
  courses = courses.filter(course => course.id !== id);

  updateLocalStorage();

  init();
}

// Update local storage courses
function updateLocalStorage() {
  localStorage.setItem('courses', JSON.stringify(courses));
}

// Init app
function init() {
  list.innerHTML = '';

  courses.forEach(addcourseDOM);
  
}

init();

form.addEventListener('submit', addcourse);
