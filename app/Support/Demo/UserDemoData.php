<?php

namespace App\Support\Demo;

/**
 * UserDemoData — UPS PMS Staff and System Accounts.
 *
 * Each prison facility is provisioned with operational staff covering:
 * - Officer in Charge (facility_officer_in_charge)
 * - Records Officer (records_officer)
 * - Duty Warden (duty_warden)
 *
 * National leadership and audit accounts operate at the National scope.
 */
class UserDemoData
{
    public const ACCOUNT_STATUSES = ['Active', 'Invited', 'Suspended', 'Deactivated'];

    /**
     * @return list<array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            // =================================================================
            // National Leadership & Compliance
            // =================================================================
            [
                'id' => 1,
                'user_ref' => 'DEMO-USR-0001',
                'personnel_id' => 7,
                'name' => 'Isaac Ssebatindira',
                'email' => 'i.ssebatindira@ups.go.ug',
                'role_key' => 'commissioner',
                'facility_scope' => 'National',
                'status' => 'Active',
                'last_login' => '2026-11-11 08:42',
                'created_date' => '2025-02-03',
                'invited_by' => null,
            ],
            [
                'id' => 7,
                'user_ref' => 'DEMO-USR-0007',
                'personnel_id' => null,
                'name' => 'Auditor (Internal Audit)',
                'email' => 'compliance.audit@ups.go.ug',
                'role_key' => 'auditor',
                'facility_scope' => 'National (read-only)',
                'status' => 'Active',
                'last_login' => '2026-10-30 09:12',
                'created_date' => '2025-09-02',
                'invited_by' => null,
            ],

            // =================================================================
            // Facility 1: Luzira Upper Prison (Central / Kampala)
            // =================================================================
            [
                'id' => 2,
                'user_ref' => 'DEMO-USR-0002',
                'personnel_id' => 1,
                'name' => 'Patrick Ochieng',
                'email' => 'p.ochieng@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Luzira Upper Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:15',
                'created_date' => '2025-02-05',
                'invited_by' => null,
            ],
            [
                'id' => 11,
                'user_ref' => 'DEMO-USR-0011',
                'personnel_id' => 18,
                'name' => 'Sarah Namukasa',
                'email' => 's.namukasa@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Luzira Upper Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 08:00',
                'created_date' => '2025-02-10',
                'invited_by' => 'DEMO-USR-0002',
            ],
            [
                'id' => 12,
                'user_ref' => 'DEMO-USR-0012',
                'personnel_id' => 15,
                'name' => 'Kenneth Buyinza',
                'email' => 'k.buyinza@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Luzira Upper Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:45',
                'created_date' => '2025-02-12',
                'invited_by' => 'DEMO-USR-0002',
            ],

            // =================================================================
            // Facility 2: Murchison Bay Prison (Central / Kampala)
            // =================================================================
            [
                'id' => 13,
                'user_ref' => 'DEMO-USR-0013',
                'personnel_id' => 19,
                'name' => 'Fred Ssekibuule',
                'email' => 'f.ssekibuule@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Murchison Bay Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:30',
                'created_date' => '2025-03-01',
                'invited_by' => null,
            ],
            [
                'id' => 5,
                'user_ref' => 'DEMO-USR-0005',
                'personnel_id' => 2,
                'name' => 'Grace Akello',
                'email' => 'g.akello@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Murchison Bay Prison',
                'status' => 'Active',
                'last_login' => '2026-11-09 14:22',
                'created_date' => '2025-05-20',
                'invited_by' => 'DEMO-USR-0002',
            ],
            [
                'id' => 9,
                'user_ref' => 'DEMO-USR-0009',
                'personnel_id' => 8,
                'name' => 'Faridah Nassolo',
                'email' => 'f.nassolo@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Murchison Bay Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 10:40',
                'created_date' => '2025-07-15',
                'invited_by' => 'DEMO-USR-0001',
            ],

            // =================================================================
            // Facility 3: Kampala Prison (Central / Kampala)
            // =================================================================
            [
                'id' => 14,
                'user_ref' => 'DEMO-USR-0014',
                'personnel_id' => 17,
                'name' => 'Gerald Muganzi',
                'email' => 'g.muganzi@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Kampala Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:10',
                'created_date' => '2025-03-15',
                'invited_by' => null,
            ],
            [
                'id' => 15,
                'user_ref' => 'DEMO-USR-0015',
                'personnel_id' => 32,
                'name' => 'Annet Kayiwa',
                'email' => 'a.kayiwa@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Kampala Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 15:20',
                'created_date' => '2025-03-20',
                'invited_by' => 'DEMO-USR-0014',
            ],
            [
                'id' => 4,
                'user_ref' => 'DEMO-USR-0004',
                'personnel_id' => 3,
                'name' => 'Samuel Tumusiime',
                'email' => 's.tumusiime@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Kampala Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:58',
                'created_date' => '2025-04-01',
                'invited_by' => null,
            ],

            // =================================================================
            // Facility 4: Gulu Prison (Northern / Gulu)
            // =================================================================
            [
                'id' => 16,
                'user_ref' => 'DEMO-USR-0016',
                'personnel_id' => 10,
                'name' => 'Christine Aber',
                'email' => 'c.aber@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Gulu Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 08:15',
                'created_date' => '2025-04-10',
                'invited_by' => null,
            ],
            [
                'id' => 8,
                'user_ref' => 'DEMO-USR-0008',
                'personnel_id' => 4,
                'name' => 'Harriet Atim',
                'email' => 'h.atim@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Gulu Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 11:30',
                'created_date' => '2025-04-15',
                'invited_by' => 'DEMO-USR-0016',
            ],
            [
                'id' => 17,
                'user_ref' => 'DEMO-USR-0017',
                'personnel_id' => 16,
                'name' => 'Irene Auma',
                'email' => 'i.auma@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Gulu Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:30',
                'created_date' => '2025-04-20',
                'invited_by' => 'DEMO-USR-0016',
            ],

            // =================================================================
            // Facility 5: Fort Portal Prison (Western / Kabarole)
            // =================================================================
            [
                'id' => 6,
                'user_ref' => 'DEMO-USR-0006',
                'personnel_id' => 5,
                'name' => 'Moses Kyomuhendo',
                'email' => 'm.kyomuhendo@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Fort Portal Prison',
                'status' => 'Active',
                'last_login' => '2026-11-08 11:05',
                'created_date' => '2025-06-11',
                'invited_by' => null,
            ],
            [
                'id' => 18,
                'user_ref' => 'DEMO-USR-0018',
                'personnel_id' => 20,
                'name' => 'Jane Akello',
                'email' => 'j.akello@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Fort Portal Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 14:00',
                'created_date' => '2025-06-15',
                'invited_by' => 'DEMO-USR-0006',
            ],
            [
                'id' => 19,
                'user_ref' => 'DEMO-USR-0019',
                'personnel_id' => 11,
                'name' => 'Andrew Wamala',
                'email' => 'a.wamala@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Fort Portal Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:05',
                'created_date' => '2025-06-20',
                'invited_by' => 'DEMO-USR-0006',
            ],

            // =================================================================
            // Facility 6: Soroti Prison (Eastern / Soroti)
            // =================================================================
            [
                'id' => 20,
                'user_ref' => 'DEMO-USR-0020',
                'personnel_id' => 12,
                'name' => 'Brenda Mukaaya',
                'email' => 'b.mukaaya@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Soroti Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:45',
                'created_date' => '2025-07-01',
                'invited_by' => null,
            ],
            [
                'id' => 3,
                'user_ref' => 'DEMO-USR-0003',
                'personnel_id' => 6,
                'name' => 'Lydia Nabwire',
                'email' => 'l.nabwire@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Soroti Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 16:30',
                'created_date' => '2025-03-12',
                'invited_by' => 'DEMO-USR-0020',
            ],
            [
                'id' => 21,
                'user_ref' => 'DEMO-USR-0021',
                'personnel_id' => 21,
                'name' => 'Joseph Olweny',
                'email' => 'j.olweny@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Soroti Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:15',
                'created_date' => '2025-07-05',
                'invited_by' => 'DEMO-USR-0020',
            ],

            // =================================================================
            // Facility 7: Kigo Prison (Central / Wakiso)
            // =================================================================
            [
                'id' => 22,
                'user_ref' => 'DEMO-USR-0022',
                'personnel_id' => 29,
                'name' => 'David Kimera',
                'email' => 'd.kimera@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Kigo Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 08:20',
                'created_date' => '2025-08-01',
                'invited_by' => null,
            ],
            [
                'id' => 23,
                'user_ref' => 'DEMO-USR-0023',
                'personnel_id' => 22,
                'name' => 'Charity Ajambo',
                'email' => 'c.ajambo@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Kigo Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 13:45',
                'created_date' => '2025-08-05',
                'invited_by' => 'DEMO-USR-0022',
            ],
            [
                'id' => 24,
                'user_ref' => 'DEMO-USR-0024',
                'personnel_id' => 13,
                'name' => 'Henry Kigozi',
                'email' => 'h.kigozi@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Kigo Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:50',
                'created_date' => '2025-08-10',
                'invited_by' => 'DEMO-USR-0022',
            ],

            // =================================================================
            // Facility 8: Jinja Prison (Eastern / Jinja)
            // =================================================================
            [
                'id' => 25,
                'user_ref' => 'DEMO-USR-0025',
                'personnel_id' => 14,
                'name' => 'Violet Nakakande',
                'email' => 'v.nakakande@ups.go.ug',
                'role_key' => 'facility_officer_in_charge',
                'facility_scope' => 'Jinja Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 07:55',
                'created_date' => '2025-09-01',
                'invited_by' => null,
            ],
            [
                'id' => 26,
                'user_ref' => 'DEMO-USR-0026',
                'personnel_id' => 30,
                'name' => 'Juliet Nakimbugwe',
                'email' => 'j.nakimbugwe@ups.go.ug',
                'role_key' => 'records_officer',
                'facility_scope' => 'Jinja Prison',
                'status' => 'Active',
                'last_login' => '2026-11-10 14:15',
                'created_date' => '2025-09-05',
                'invited_by' => 'DEMO-USR-0025',
            ],
            [
                'id' => 27,
                'user_ref' => 'DEMO-USR-0027',
                'personnel_id' => 23,
                'name' => 'Douglas Ssekandi',
                'email' => 'd.ssekandi@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Jinja Prison',
                'status' => 'Active',
                'last_login' => '2026-11-11 06:40',
                'created_date' => '2025-09-10',
                'invited_by' => 'DEMO-USR-0025',
            ],

            // Deactivated reference account
            [
                'id' => 10,
                'user_ref' => 'DEMO-USR-0010',
                'personnel_id' => null,
                'name' => 'Former Officer (account closed)',
                'email' => 'retired.officer@ups.go.ug',
                'role_key' => 'duty_warden',
                'facility_scope' => 'Jinja Prison',
                'status' => 'Deactivated',
                'last_login' => '2026-06-01 08:00',
                'created_date' => '2025-01-20',
                'invited_by' => null,
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        foreach (static::all() as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }

        return null;
    }

    public static function findByRef(string $ref): ?array
    {
        foreach (static::all() as $user) {
            if ($user['user_ref'] === $ref) {
                return $user;
            }
        }

        return null;
    }

    /** Display name for an actor reference used by audit events. */
    public static function displayName(?int $userId): string
    {
        if ($userId === null) {
            return 'System';
        }

        $user = static::find($userId);

        return $user ? $user['name'].' ('.RoleDemoData::nameForKey($user['role_key']).')' : 'Unknown account #'.$userId;
    }

    /** @return array{total:int, active:int, invited:int, suspended:int, deactivated:int} */
    public static function summaryCounts(): array
    {
        $counts = ['total' => 0, 'active' => 0, 'invited' => 0, 'suspended' => 0, 'deactivated' => 0];
        foreach (static::all() as $user) {
            $counts['total']++;
            $counts[strtolower($user['status'])]++;
        }

        return $counts;
    }

    /** Enrich a user row with role/personnel context for views. */
    public static function enrich(array $user): array
    {
        $user['role_name'] = RoleDemoData::nameForKey($user['role_key']);
        $user['initials'] = strtoupper(substr($user['name'], 0, 1));
        $user['personnel'] = $user['personnel_id'] ? PersonnelDemoData::enrich(PersonnelDemoData::find($user['personnel_id'])) : null;

        return $user;
    }
}
