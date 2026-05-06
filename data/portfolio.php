<?php
// Mock data for Portfolio (Case Studies / Erfolge)
return [
    [
        'id' => 1,
        'category' => 'web', // We will map 'web' to 'Corporate' in UI
        'image_url' => 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?auto=format&fit=crop&w=800&q=80',
        'title_en' => 'Successful Defense in €5M Litigation',
        'title_de' => 'Erfolgreiche Abwehr einer €5M-Klage',
        'client' => 'Manufacturing Sector',
        'desc_en' => 'We successfully defended a leading manufacturing company against unjustified breach of contract claims in international arbitration.',
        'desc_de' => 'Wir haben ein führendes Produktionsunternehmen erfolgreich gegen ungerechtfertigte Vertragsverletzungsansprüche in einem internationalen Schiedsverfahren verteidigt.'
    ],
    [
        'id' => 2,
        'category' => 'branding', // 'branding' -> 'Employment'
        'image_url' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80',
        'title_en' => 'Executive Severance Negotiation',
        'title_de' => 'Verhandlung von Vorstandsabfindungen',
        'client' => 'C-Level Executive',
        'desc_en' => 'Negotiated a highly favorable severance package and post-contractual non-compete waiver for a departing CEO.',
        'desc_de' => 'Verhandlung einer äußerst vorteilhaften Abfindung und eines nachvertraglichen Wettbewerbsverzichts für einen scheidenden CEO.'
    ],
    [
        'id' => 3,
        'category' => 'app', // 'app' -> 'Litigation'
        'image_url' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&q=80',
        'title_en' => 'Landmark Trademark Dispute',
        'title_de' => 'Grundsatzstreit im Markenrecht',
        'client' => 'Tech Startup',
        'desc_en' => 'Secured an injunction against a competitor infringing on our client\'s core intellectual property, protecting their market share.',
        'desc_de' => 'Erwirkung einer einstweiligen Verfügung gegen einen Konkurrenten, der das geistige Eigentum unseres Mandanten verletzte, um dessen Marktanteil zu schützen.'
    ],
    [
        'id' => 4,
        'category' => 'web',
        'image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
        'title_en' => 'Cross-Border M&A Transaction',
        'title_de' => 'Grenzüberschreitende M&A-Transaktion',
        'client' => 'European Logistics Firm',
        'desc_en' => 'Acted as lead counsel in the €150M acquisition of a competitor, navigating complex regulatory and antitrust hurdles.',
        'desc_de' => 'Federführende Beratung bei der 150-Millionen-Euro-Übernahme eines Wettbewerbers unter Überwindung komplexer regulatorischer und kartellrechtlicher Hürden.'
    ]
];
