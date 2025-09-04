# BBI Hub

BBI Hub is an integrated platform designed to manage partner workshops (Mitra Bengkel) and technicians efficiently. It is connected with **BBI Auto**, the main application that manages the overall automotive service ecosystem. BBI Hub focuses on service scheduling, technician task management, real-time communication, and operational analytics for partner workshops.

---

## 1. Overview
BBI Hub provides a seamless digital solution for workshops and technicians to:
- Schedule and manage service jobs (motorcycle/car)
- Record service history and upload evidence photos
- Manage spare parts inventory
- View workshop profiles and ratings
- Submit work reports and feedback
- Communicate with customers in real-time
- Access dashboard analytics for workshop performance
- Receive push notifications for job updates and deadlines

---

## 2. Key Features
- **Service Scheduling** – Manage detailed service jobs with reminders
- **Service History** – Track repair details and updates
- **Inventory Management** – Control spare parts and cost estimation
- **Workshop Profile** – Display details, photos, and specialties
- **Reports & Feedback** – Submit and review technician performance
- **Real-Time Chat** – Communicate between users and technicians
- **Dashboard Analytics** – Visualize data for better decisions
- **Push Notifications** – Get alerts for new tasks and deadlines

---

## 3. Tech Stack
### Web
- **Frontend:** Laravel, Livewire, Filament, Tailwind CSS
- **Backend:** Laravel (REST API)
- **Database:** MySQL
- **Tools:** Composer, NPM, Vite

### Mobile
- **Framework:** Flutter (Dart)
- **Notification:** Firebase Cloud Messaging (FCM)
- **API Integration:** Laravel REST API

### Deployment & Tools
- **Version Control:** Git + GitHub
- **Project Management:** GitHub Projects / Jira / Trello
- **CI/CD:** GitHub Actions / Jenkins
- **Containerization:** Docker (optional)
- **Testing Tools:** Postman, Cypress, Appium

---

## 4. Installation Guide

### 4.1. Backend (Laravel API)
```bash
# Clone repository
git clone https://github.com/your-username/bbi-hub.git
cd bbi-hub

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Start local server
php artisan serve
```

### 4.2. Frontend (Laravel + Livewire)
```bash
# Install NPM packages
npm install

# Build assets
npm run dev
```

### 4.3. Mobile (Flutter)
```bash
# Navigate to mobile app directory
cd mobile

# Get dependencies
flutter pub get

# Run app
flutter run
```

---

## 5. Project Structure
```
bbi-hub/
├── backend/              # Laravel API source code
│   ├── app/
│   ├── database/
│   ├── routes/
│   └── ...
├── web/                  # Frontend (Laravel + Livewire)
├── mobile/               # Flutter app
├── .github/              # GitHub workflows & templates
├── README.md
└── LICENSE
```

---

## 6. Collaboration Guidelines (GitHub Workflow)

### 6.1. Branching Strategy
- **main** – Production-ready code
- **develop** – Integration branch for next release
- **feature/** – New features (e.g., `feature/service-scheduler`)
- **fix/** – Bug fixes (e.g., `fix/login-bug`)
- **hotfix/** – Urgent fixes on production

### 6.2. Git Flow Steps
1. **Fork** the repository
2. **Create a feature branch**:
   ```bash
   git checkout -b feature/your-feature
   ```
3. **Commit changes** using the correct format
4. **Push to your fork**:
   ```bash
   git push origin feature/your-feature
   ```
5. **Create a Pull Request (PR)** to `develop`

---

## 7. Commit Message Guidelines
We follow **Conventional Commits** format:

```
<type>(<scope>): <short description>

[optional body]

[optional footer]
```

### Common Types:
- `feat` : new feature
- `fix` : bug fix
- `docs` : documentation changes
- `style` : UI or style changes
- `refactor` : code restructure without changing behavior
- `test` : add or update tests
- `chore` : minor updates like dependencies or configs

#### Examples:
```
feat(auth): add JWT authentication for API
fix(schedule): resolve incorrect time display on dashboard
docs(readme): update installation guide and badges
```

---

## 8. Pull Request Template

### Title:
```
[Feature] Add JWT Authentication to API
[Fix] Correct Schedule Time Calculation
[Docs] Update README with Setup Instructions
```

### Description:
```
### What's Changed
- Implemented JWT authentication for secure API access
- Updated user model to store refresh tokens
- Added new endpoint `/auth/refresh-token`

### Why This Change?
- Improve security for API requests
- Allow token refresh without re-login

### How to Test?
1. Pull latest code from this branch
2. Run `npm install`
3. Start the server and test `/auth/login` endpoint
4. Verify token-based authentication works properly

### Checklist
- [x] Code tested locally
- [x] Unit tests added/updated
- [ ] Documentation updated
```

---

## 9. Best Practices
- One commit = one logical change
- Use **English** for commits and PRs
- Use `WIP:` prefix for work-in-progress PRs
- Link issues in commits or PRs using `Closes #issue_number`

---

## 10. License
This project is licensed under the [MIT License](LICENSE).
