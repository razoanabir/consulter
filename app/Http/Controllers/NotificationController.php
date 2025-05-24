<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // Mark a single notification as read
    public function markAsRead($id)
    {
        // Find the notification by ID for the authenticated user
        $notification = auth()->user()->notifications()->find($id);

        if ($notification) {
            // Retrieve the client_slug before deleting the notification
            $clientSlug = $notification->data['client_slug'] ?? null;

            // Delete the notification from the database
            $notification->delete();

            // Redirect to the details page if client_slug exists
            if ($clientSlug) {
                return redirect()->route('details.potential.client', ['slug' => $clientSlug]);
            } else {
                return back()->with('error', 'Client slug not found in notification.');
            }
        }

        return back()->with('error', 'Notification not found.');
    }

    // Mark all notifications as read
    public function markAllAsRead()
    {
        auth()->user()->notifications()->delete(); // Delete all notifications

        return back()->with('success', 'All notifications have been deleted.');
    }
}
