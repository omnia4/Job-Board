# Job Board API

This project is a Laravel-based Job Board API that provides job listings with filtering capabilities, along with related entities such as languages, locations, categories, and attributes.

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/your-repo/job-board-api.git
   cd job-board-api
   ```

2. **Install dependencies:**
   ```sh
   composer install
   ```

3. **Set up environment variables:**
   ```sh
   cp .env.example .env
   ```
   - Configure database settings in `.env`

4. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations and seeders:**
   ```sh
   php artisan migrate --seed
   ```

## API Endpoints

### Jobs
- `GET /api/jobs` - Retrieve all jobs with optional filtering.
- `POST /api/jobs` - Create a new job.
- `GET /api/jobs/{id}` - Retrieve a specific job.
- `PUT /api/jobs/{id}` - Update a job.
- `DELETE /api/jobs/{id}` - Delete a job.

### Filters
- `GET /api/jobs/filter` - Retrieve jobs using various filters.

### Related Data
- `GET /api/languages` - List available languages.
- `GET /api/locations` - List available locations.
- `GET /api/categories` - List job categories.
- `GET /api/attributes` - List job attributes.

## Running the Server

To start the Laravel development server, run:
```sh
php artisan serve
```

The API will be available at `http://127.0.0.1:8000`

## Notes
- Ensure that your `.env` file is correctly configured before running migrations.
- Use Postman or another API testing tool to test the endpoints.
- The filtering system allows searching by title, company name, salary range, remote jobs, and job type.

## Postman Collection
You can import the Postman collection from the following link:
[Download Postman Collection](Job Board.postman_collection.json)
