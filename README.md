# Slovak Namedays Laravel Package

This package provides a simple and convenient way to retrieve Slovak namedays based on date. The data is sourced from a JSON file and supports the full Slovak calendar year, including adjustments for leap years.

## Features

- Retrieve namedays for any date in the Slovak calendar.
- Includes support for leap years.
- Easy integration into any Laravel project.

## Installation

1. **Install via Composer:**

   Run the following command in your terminal to install the package:

   ```bash
   composer require janknapik/slovak-namedays
   ```

2. **Publish the Configuration (optional):**

   After installation, if you want to customize the package configuration, you can publish the configuration file:

   ```bash
   php artisan vendor:publish --tag=slovak-namedays-config
   ```

3. **Namedays Data File:**

   The JSON file containing the nameday data will be stored in the data/namedays.json directory. You can customize the data if needed by editing this file.

   ```bash
   php artisan vendor:publish --tag=slovak-namedays-config
   ```

## Usage

To use the package, you can call the getSlovakNamedays($date) function to retrieve the nameday for a specific date. The date should be provided in MM-DD format, such as "01-01" for January 1st.

## Example

```bash
use Janknapik\SlovakNamedays\SlovakNamedays;

$date = '01-01';
$nameday = SlovakNamedays::getSlovakNamedays($date);

echo "The nameday for $date is: $nameday"; // Output example: The nameday for 01-01 is: Nový Rok
```

## Handling Custom Dates

To get the nameday for a specific date, pass the date as a string in the format MM-DD:

```bash
$date = '02-14';
echo SlovakNamedays::getSlovakNamedays($date); // Output example: Valentín
```
## Configuration
The namedays.json file in the data directory contains the nameday data for every day of the year. The format for each entry is "MM-DD": "Name". You can edit this file if you need to add custom namedays or modify existing entries.

## License
This package is open-source software, licensed under the [MIT License](https://choosealicense.com/licenses/mit/).

## Contributing
We welcome contributions from the community! If you'd like to suggest a feature, report a bug, or contribute code, please follow these steps:

Fork the repository.
Create a new branch for your feature or bugfix.
Make your changes and test them thoroughly.
Submit a pull request with a detailed description of your changes.
This package was developed and maintained by janknapik. If you have any questions or issues, please feel free to reach out or open an issue on GitHub.

Thank you for using the Slovak Namedays Laravel Package!