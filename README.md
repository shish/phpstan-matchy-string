# PHPStan Matchy Strings

- patterns defined in `phpstan.neon`, eg `email-string: '^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'`
- function defined like:

```php
/**
 * @param email-string $email
 */
function sendEmail(string $email): void {
    ...
}
```

- phpstan will then allow `sendEmail("bob@example.com")` but not `sendEmail("bob@example")`
