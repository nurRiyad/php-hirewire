<?php

/**
 * Get he base path
 * @param string $path
 * @return string
 */
function basePath($path): string
{
  return __DIR__ . '/' . $path;
}

/**
 * Partials Loader
 * @param string $name
 * @return void
 */
function loadPartials($name)
{
  $path = __DIR__ . '/views/partials/' . $name . '.php';
  if (file_exists($path)) {
    require($path);
  } else {
    echo 'No partials found name' . $name;
  }
}

/**
 * Load View
 * @param string $name
 */
function loadViews($name)
{
  $path = __DIR__ . '/views/' . $name . '.view.php';
  if (file_exists($path)) {
    require($path);
  } else echo 'No view exist named ' . $name;
}
