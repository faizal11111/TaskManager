
### **📌 Simple Task Manager - Laravel Application**  

A lightweight task management system built using **Laravel**, **Bootstrap**, and **jQuery**, allowing users to **add, edit, and delete tasks** seamlessly.  

---

## **📌 Features**  
✅ **CRUD Operations** – Create, Read, Update, and Delete tasks.  
✅ **Bootstrap UI** – Responsive and clean user interface.  
✅ **jQuery Validation** – Ensures required fields are filled before submission.  
✅ **Delete Confirmation** – Prompts users before deleting a task.  
✅ **MVC Architecture** – Follows Laravel’s structured design pattern.  

---

## **📌 Installation & Setup**  

### **1️⃣ Clone the Repository**  
```sh
git clone https://github.com/your-username/TaskManager.git
cd TaskManager
```

### **2️⃣ Install Dependencies**  
```sh
composer install
npm install
```

### **3️⃣ Configure Environment**  
```sh
cp .env.example .env
php artisan key:generate
```
Update `.env` with database credentials.

### **4️⃣ Run Migrations**  
```sh
php artisan migrate
```

### **5️⃣ Start the Server**  
```sh
php artisan serve
```

Open your browser and go to:  
**`http://127.0.0.1:8000/tasks`**  

---

## **📌 Usage**  
- **Add Tasks** – Click the "Add Task" button and enter details.  
- **Edit Tasks** – Click "Edit" to modify task details.  
- **Delete Tasks** – Click "Delete" (a confirmation popup will appear).  

---

## **📌 Project Structure**  

```
TaskManager/
│── app/
│   ├── Http/Controllers/TaskController.php
│── database/
│   ├── migrations/xxxx_xx_xx_create_tasks_table.php
│── resources/
│   ├── views/tasks/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│── routes/
│   ├── web.php
│── public/
│── .env
│── README.md
│── composer.json
│── package.json
```

---

## **📌 Contributing**  
Contributions are welcome! Feel free to fork this repository, improve features, and submit a pull request.  

---
 Laravel & Love ❤️ 

