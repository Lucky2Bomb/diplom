<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Groups{
/**
 * App\Models\Groups\Group
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property bool $is_closed
 * @property string|null $group_form_of_studying_type
 * @property string|null $university_name
 * @property string|null $faculty_name
 * @property string|null $specialty_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Groups\GroupFaculty $groupFaculty
 * @property-read \App\Models\Groups\GroupFormOfStudying $groupFormOfStudying
 * @property-read \App\Models\Groups\GroupSpecialty $groupSpecialty
 * @property-read \App\Models\Groups\GroupUniversity $groupUniversity
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereFacultyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereGroupFormOfStudyingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereSpecialtyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUniversityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models\Groups{
/**
 * App\Models\Groups\GroupFaculty
 *
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFaculty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFaculty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFaculty query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFaculty whereName($value)
 */
	class GroupFaculty extends \Eloquent {}
}

namespace App\Models\Groups{
/**
 * App\Models\Groups\GroupFormOfStudying
 *
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Groups\Group[] $groups
 * @property-read int|null $groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFormOfStudying newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFormOfStudying newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFormOfStudying query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupFormOfStudying whereName($value)
 */
	class GroupFormOfStudying extends \Eloquent {}
}

namespace App\Models\Groups{
/**
 * App\Models\Groups\GroupSpecialty
 *
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Groups\Group[] $groups
 * @property-read int|null $groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|GroupSpecialty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupSpecialty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupSpecialty query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupSpecialty whereName($value)
 */
	class GroupSpecialty extends \Eloquent {}
}

namespace App\Models\Groups{
/**
 * App\Models\Groups\GroupUniversity
 *
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Groups\Group[] $groups
 * @property-read int|null $groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|GroupUniversity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupUniversity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupUniversity query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupUniversity whereName($value)
 */
	class GroupUniversity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GuestRequest
 *
 * @property int $id
 * @property string $description
 * @property bool $is_checked
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GuestRequest whereUserId($value)
 */
	class GuestRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Position
 *
 * @property string $name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\PositionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereName($value)
 */
	class Position extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\Publication
 *
 * @property int $id
 * @property string $slug
 * @property string|null $preview_image
 * @property string $preview_text
 * @property string $title
 * @property string $description
 * @property bool $is_published
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationComment[] $publicationComments
 * @property-read int|null $publication_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationComplaint[] $publicationComplaints
 * @property-read int|null $publication_complaints_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationNotification[] $publicationNotifications
 * @property-read int|null $publication_notifications_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\Publications\PublicationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePreviewImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePreviewText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUserId($value)
 */
	class Publication extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\PublicationComment
 *
 * @property int $id
 * @property string $description
 * @property int $user_id
 * @property int $publication_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment wherePublicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComment whereUserId($value)
 */
	class PublicationComment extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\PublicationComplaint
 *
 * @property int $id
 * @property string $description
 * @property bool $is_checked
 * @property int $user_id
 * @property int $publication_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Publications\Publication $publication
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint query()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint wherePublicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationComplaint whereUserId($value)
 */
	class PublicationComplaint extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\PublicationNotification
 *
 * @property int $id
 * @property bool $is_checked
 * @property int $user_id
 * @property int $publication_id
 * @property int $comment_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Publications\PublicationComment $comment
 * @property-read \App\Models\Publications\Publication $publication
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification wherePublicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationNotification whereUserId($value)
 */
	class PublicationNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property string $slug
 * @property string $login
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $avatar
 * @property string|null $header_background_image
 * @property string|null $vk
 * @property string|null $ok
 * @property string|null $facebook
 * @property string|null $telegram
 * @property string|null $phone_number
 * @property string|null $position_name
 * @property int|null $group_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Groups\Group|null $group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GuestRequest[] $guestRequests
 * @property-read int|null $guest_requests_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Position $position
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationComment[] $publicationComments
 * @property-read int|null $publication_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationComplaint[] $publicationComplaints
 * @property-read int|null $publication_complaints_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\PublicationNotification[] $publicationNotifications
 * @property-read int|null $publication_notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\Publication[] $publications
 * @property-read int|null $publications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserSubscriber[] $userSubscribers
 * @property-read int|null $user_subscribers_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHeaderBackgroundImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePatronymic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePositionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVk($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSubscriber
 *
 * @property int $id
 * @property int $user_id
 * @property int $subscriber_id
 * @property-read \App\Models\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber whereSubscriberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscriber whereUserId($value)
 */
	class UserSubscriber extends \Eloquent {}
}

