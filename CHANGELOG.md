# CHANGELOG

# 1.2.1

- [OAuth2] Provider\Facebook - fixed BC changes

# 1.2.0

- [OAuth2] Implement Discord provider
- Up code coverage from `40%` -> `41%`

# 1.1.0

- Start using `socialconnect/common` ~1.0 (`HTTP\Client\Cache` & `Entity\User`->`emailVerified`)
- Up code coverage from `10%` -> `40%`
- [OAuth1] Twitter - require email
- [OAuth2] Provider\FB\GitHub\Google\Instagram - added checks for JSON (throw exception1)
- [OAuth2] Facebook\VK\Twitter\Google populate property `emailVerified` for `Entity\User`
- [OpenIDConnect] First working implementation of it and `JWT` and `JWK`
- [OpenIDConnect] Implement `Google` provider
- [OpenID]/[OpenIDConnect] Tests HTTP Client Cache decorator https://github.com/SocialConnect/auth/pull/22
