Deploying this Laravel app to Render (quick guide)

1) Push to GitHub
- Create a new GitHub repo and push this project.

2) Create a Render Web Service
- Sign in to https://render.com
- New -> Web Service -> Connect GitHub repo -> Select branch

3) Render settings
- Environment: `Docker`
- Build command: (none) since Dockerfile used
- Start command: leave blank; the Dockerfile runs migrations, seeds the initial content, and starts Laravel on Render's `$PORT`.
- Set Environment Variables (render dashboard -> Environment):
  - `APP_ENV=production`
  - `APP_KEY` (generate via `php artisan key:generate --show` locally and add; the Blueprint prompts for this value)
  - `DB_CONNECTION=sqlite` and `DB_DATABASE=/var/www/html/database/database.sqlite` for a demo deployment

4) Deploy and open the provided public URL

Notes
- SQLite storage on Render's free service is ephemeral and resets when the service is rebuilt or redeployed. For persistent production data, use Render Managed Postgres and update `DB_CONNECTION`, `DB_*`, and the Dockerfile to install `pdo_pgsql`.
- Change the seeded admin password immediately after the first deployment.
- Alternatively use Fly or Railway; steps are similar when using Docker.
