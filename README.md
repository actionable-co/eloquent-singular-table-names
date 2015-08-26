# Eloquent singular table names
Makes Eloquent models use singular (rather than plural) table names by default.

## Usage
Simple apply the trait to your Eloquent model:

```php
namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\SingularTableName;

class User extends Model
{
    use SingularTableName;
}
```

The default table name will be `user` now, rather than `users`.

If you wish to use singular table names for _all_ of your models, then you can create an abstract class that implements the trait, and have all of your models extend that class:

```php
namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\SingularTableName;

abstract class SingularModel extends Model
{
    use SingularTableName;
}
```

```php
namespace App;

class User extends SingularModel
{
    // No need to implement trait
}
```
