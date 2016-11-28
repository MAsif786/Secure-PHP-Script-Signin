# PHP Secure Script
One page element used for basic, secure authentication using php.

## One-Page
This one is a very simple script in PHP, designed for speed and simplicity.
This is useful for very small, password-protected areas on a website/webserver.
** Not recommended for protecting sensitive material!!! **

## Added-Security
This one is a bit more secure. Including Base64 encoding, sha1 hashing,
and psuedorandom key generating. This one also includes an anti-brute-forcing
system, designed to keep out people from dictionary attacks to guess the password.
-- This one is slightly more customizable, and easier to configure.
Maintaining security, and focusing on nothing but security here.
** Still not recommended for protecting extremely sensitive material. Maybe protecting an admin-panel or something**


Please know that these two scripts are not designed to protect against all types
of web-based exploits. All types of attacks are still possible here. One could
steal the session cookie from you, and they could gain access to it with only the
session cookie (if it's still valid).

There are also much more efficient ways to protect against brute-forcing and
such, as even the code used simply bans the user based on a session variable.
All the attacker would have to do is delete the cookie and keep retrying
the password. Which can be accomplished in Python or something...

** This is still in development, but priority is limited.
I only updated this because it was requested. Please report
bugs in the [Issues](https://github.com/BlackVikingPro/Secure-PHP-Script-Signin/issues) tab. **
