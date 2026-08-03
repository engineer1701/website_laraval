Deploying this Laravel app to Render (quick guide)

1) Push to GitHub
- Create a new GitHub repo and push this project.

2) Create a Render Web Service
- Sign in to https://render.com
- New -> Web Service -> Connect GitHub repo -> Select branch

3) Render settings
- Environment: `Docker`
- Build command: (none) since Dockerfile used
- Start command: `php artisan migrate --force && php artisan db:seed --class=DatabaseSeeder && php artisan serve --host=0.0.0.0 --port=$PORT`
- Set Environment Variables (render dashboard -> Environment):
  - `APP_ENV=production`
  - `APP_KEY` (generate via `php artisan key:generate --show` locally and add)
  - `DB_CONNECTION=sqlite` (not recommended for production) OR configure a managed Postgres/MySQL and set `DB_*` accordingly
  - `PORT` (Render sets this automatically)

4) Deploy and open the provided public URL

Notes
- For persistent production DB use Render Managed Postgres and update `DB_CONNECTION` and migration/seed steps.
- Alternatively use Fly or Railway; steps are similar when using Docker.
