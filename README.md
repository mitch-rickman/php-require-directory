# Require Directory
Automatically load all php files in a directory in a non-recursive fasion.

## Usage
Include in your composer.json file

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:mitch-rickman/requiredir.git"
        }
    ],
    ...
}
```

Be sure to include the composer autoload file: `require(__DIR__ . '/vendor/autoload.php');`