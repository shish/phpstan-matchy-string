<?php

/**
 * @param url-string $url
 */
function fetchUrl(string $url): void {
    print("Fetching $url!");
}

/**
 * @param email-string $email
 */
function sendEmail(string $email): void {
    print("Sending an email to $email!");
}

fetchUrl("http://example.com"); // URLs are allowed
sendEmail("bob@example.com"); // emails are allowed
fetchUrl("bob@example.com"); // @phpstan-ignore-line - phpstan forbids giving email to fetchUrl
sendEmail("http://example.com"); // @phpstan-ignore-line - phpstan forbids giving URL to sendEmail
